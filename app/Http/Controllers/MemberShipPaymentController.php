<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MemberModel;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MemberShipPaymentController extends Controller
{
    public function pay_membership_payment($tag_id)
    {
        $application = MemberModel::where('tag_id', $tag_id)->first();
        if (!$application) {
            return redirect()->back()->with('error', 'Application not found.');
        }
        $page_title = "Pay Membership Fees";
        return view('memberShipPayment', compact('tag_id', 'page_title', 'application'));
    }
    public function pay_membership_payment_post(Request $request)
    {

        $request->validate([
            'tag_id' => 'required',
            'utr' => 'required',
            'screenshot' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        // dd($request->all());
        $application = MemberModel::where('tag_id', $request->tag_id)->first();
        if (!$application) {
            return redirect()->back()->with('error', 'Application not found.');
        }
        // Handle screenshot upload
        if ($request->hasFile('screenshot')) {
            $file = $request->file('screenshot');
            $filename = time() . '_screenshot.' . $file->getClientOriginalExtension();
            $uploadPath = public_path('uploads'); // Ensure this path exists and is writable
            $file->move($uploadPath, $filename);
            $payment_proof = 'uploads/' . $filename;
        }

        // Save UTR number
        $payment_utr = $request->utr;


        $application->payment_proof = $payment_proof;
        $application->payment_utr = $payment_utr;
        $application->payment_status = "review";
        $application->save();





        $mail = new PHPMailer(true);
        $toEmail = $application->email;
        $toName = $application->name;
       $subject = "Your form has been submitted successfully";

$body = "
<!DOCTYPE html>
<html>
<head>
  <meta charset='UTF-8'>
  <title>$subject</title>
</head>
<body style='font-family: Arial, sans-serif; background-color: #f4f4f4; margin:0; padding:0;'>
  <table align='center' cellpadding='0' cellspacing='0' width='600' style='border-collapse: collapse; background: #ffffff; box-shadow:0px 2px 8px rgba(0,0,0,0.1); border-radius: 10px; overflow: hidden;'>
    <tr>
      <td style='background-color:#4CAF50; color:#fff; text-align:center; padding:20px; font-size:22px; font-weight:bold;'>
        Samadhan Gramin Welfare & Employment Services Limited Haryana
      </td>
    </tr>
    <tr>
      <td style='padding:30px; text-align:center;'>
        <h2 style='color:#333;'>Your Form Has Been Submitted Successfully ✅</h2>
        <p style='font-size:16px; color:#555; line-height:1.5;'>
          Dear <strong>{$application->name}</strong>,<br><br>
          Your application ID is: <strong style='color:#4CAF50;'>{$application->tag_id}</strong><br>
          Registered Phone Number: <strong style='color:#4CAF50;'>{$application->phone}</strong>
        </p>
        <p style='margin-top:20px;'>
          <a href='" . route('search.member.form') . "'
             style='display:inline-block; padding:12px 25px; background-color:#4CAF50; color:#fff; text-decoration:none; font-size:16px; border-radius:5px;'>
             👉 Check Your Application
          </a>
        </p>
      </td>
    </tr>
    <tr>
      <td style='background-color:#f4f4f4; text-align:center; padding:15px; font-size:12px; color:#777;'>
        This is an automated email. Please do not reply.
      </td>
    </tr>
  </table>
</body>
</html>";

        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'noreply.samadhangramin@gmail.com';
            $mail->Password   = 'hbhhznnnebeoumtx'; // Google App password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            $mail->SMTPOptions = [
                'ssl' => [
                    'verify_peer'       => false,
                    'verify_peer_name'  => false,
                    'allow_self_signed' => true,
                ]
            ];

            $mail->setFrom('noreply.samadhangramin@gmail.com', 'samadhangramin');
            $mail->addAddress($toEmail, $toName);

            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $body;
            $mail->AltBody = strip_tags($body);


            $mail->send();
            return redirect()->route('home')->with('success', 'Payment proof uploaded successfully plese wait for verify or check your mail box !!');
        } catch (Exception $e) {
            return redirect()->route('home')->with('success', 'Payment proof uploaded successfully plese wait for verify !!');
        }
    }



    public function new_payment_list_member_ship()
    {
        $new_payment_list = MemberModel::where('payment_status', 'review')
            ->whereNotNull('payment_utr')
            ->where('payment_utr', '!=', '')
            ->orderBy('id', 'DESC')
            ->get();

        return view('super_admin.new_payments_membership', compact('new_payment_list'));
    }
    public function update_payment_status_membership($id, $status)
    {
        // Validate allowed statuses
        $allowedStatuses = ['pending', 'completed', 'failed', 'review'];

        if (!in_array($status, $allowedStatuses)) {
            return redirect()->back()->with('error', 'Invalid payment status!');
        }

        // Get and update record
        $job = MemberModel::findOrFail($id);
        $job->payment_status = $status;
        $job->save();

        return redirect()->back()->with('success', 'Payment status updated successfully!');
    }
}
