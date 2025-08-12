<!-- Footer -->
<footer class="footer-area pt-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-logo">
                        <a class="logo" href="index.html">
                            <img src="{{ asset($small_logo) }}" class="logo-one" alt="Logo" width="120">
                        </a>


                        <p>समाधान ग्रामीण वैलफेयर एण्ड इम्प्लॉईमेंट सर्विसिज लिमिटेड पंजीकृत कॉरपोरेट कार्य मंत्रालय,
                            भारत सरकार</p>

                        <ul>
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class="icofont-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.twitter.com/" target="_blank">
                                    <i class="icofont-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/" target="_blank">
                                    <i class="icofont-youtube-play"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <i class="icofont-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-links">
                        <h3>Quick links</h3>
                        <ul>
                            <li>
                                <a href="{{ route('overview') }}">
                                    <i class="icofont-simple-right"></i>
                                    Overview
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('services') }}">
                                    <i class="icofont-simple-right"></i>
                                    Service
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('gallery') }}">
                                    <i class="icofont-simple-right"></i>
                                    Gallery
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">
                                    <i class="icofont-simple-right"></i>
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-links">
                        <h3>Download</h3>
                        <ul>
                            <li>
                                <a href="{{ asset('assets/membership_form.pdf') }}" target="_blank"> <i
                                        class="icofont-simple-right"></i> Membership Form</a>
                            </li>
                            <li>
                                <a href="{{ asset('assets/application.pdf') }}" target="_blank"> <i
                                        class="icofont-simple-right"></i> Job Application From</a>
                            </li>
                            <li>
                                <a href="{{ asset('assets/SAMADHAN_CERTIFICATE_OF_INCORPORATION-20191218.pdf') }}"
                                    target="_blank"> <i class="icofont-simple-right"></i> Certificates</a>

                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-contact">
                        <h3>Registered Adresss</h3>
                        <div class="contact-inner">
                            <ul>
                                <li>
                                    <i class="icofont-location-pin"></i>
                                    <a href="#">{{ $web_address }}</a>
                                </li>
                                <li>
                                    <i class="icofont-whatsapp"></i>
                                    <a href="tel:123456789">+91 {{ $web_phone2 }}  (Only Whatsapp)</a>
                                </li>
                            </ul>
                        </div>
                        {{-- <div class="contact-inner">
                            <ul>
                                <li>
                                    <i class="icofont-location-pin"></i>
                                    <a href="#">{{ $web_address }}</a>
                                </li>
                                <li>
                                    <i class="icofont-whatsapp"></i>
                                    <a href="tel:548658956">+91 {{ $web_phone2 }}</a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <p>Copyright @
                <script>
                    document.write(new Date().getFullYear())
                </script> SGWESLTD.


                {{-- Designed By <a href="https://techgeometry.com/" target="_blank">TechGeometry</a> --}}
            </p>
        </div>
    </div>
</footer>
<!-- End Footer -->

<!-- Go Top -->
<div class="go-top">
    <i class="icofont-arrow-up"></i>
    <i class="icofont-arrow-up"></i>
</div>
<!-- End Go Top -->

<!--=== Essential JS ===-->

<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
<script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
<script src="{{ asset('assets/js/jquery-modal-video.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/lightbox.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/odometer.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

<script>
(function(){
  'use strict';

  const showConsole = true; // true => console में नोटिस दिखेगा, false => silent

  function log(msg){
    if(showConsole) console.warn('AntiCapture:', msg);
  }

  // 1) राइट-क्लिक, टेक्स्ट सेलेक्ट और कॉपी/कट ब्लॉक
  document.addEventListener('contextmenu', function(e){
    e.preventDefault();
    log('Context menu blocked');
  }, true);

  document.addEventListener('selectstart', function(e){
    e.preventDefault();
    log('Text select blocked');
  }, true);

  document.addEventListener('copy', function(e){
    e.preventDefault();
    log('Copy blocked');
  }, true);

  document.addEventListener('cut', function(e){
    e.preventDefault();
    log('Cut blocked');
  }, true);

  // 2) सामान्य कीबोर्ड शॉर्टकट्स ब्लॉक (F12, PrintScreen, Ctrl/Cmd combinations)
  document.addEventListener('keydown', function(e){
    // key normalization
    const k = e.key ? e.key.toLowerCase() : '';
    const kc = e.keyCode || 0;

    // conditions to block
    const isF12 = kc === 123;
    const isPrintScreen = kc === 44 || k === 'printscreen' || k === 'print';
    const isCtrlShiftI = (e.ctrlKey || e.metaKey) && e.shiftKey && (k === 'i');
    const isCtrlShiftJ = (e.ctrlKey || e.metaKey) && e.shiftKey && (k === 'j');
    const isCtrlU = (e.ctrlKey || e.metaKey) && k === 'u';
    const isCtrlS = (e.ctrlKey || e.metaKey) && k === 's';
    const isCtrlP = (e.ctrlKey || e.metaKey) && k === 'p';
    const isCtrlShiftC = (e.ctrlKey || e.metaKey) && e.shiftKey && (k === 'c');

    if (isF12 || isPrintScreen || isCtrlShiftI || isCtrlShiftJ || isCtrlU || isCtrlS || isCtrlP || isCtrlShiftC) {
      e.preventDefault();
      e.stopPropagation();
      log('Blocked keyboard shortcut: keyCode=' + kc + ', key=' + k);
      return false;
    }
  }, true);

  // 3) PrintScreen detection attempt (keyup) -> try clear clipboard image (best-effort)
  async function tryClearClipboardImage(){
    try {
      if (!navigator.clipboard || !navigator.clipboard.read) return;
      const items = await navigator.clipboard.read();
      for (const item of items) {
        if (!item.types) continue;
        if (item.types.some(t => t.startsWith('image/'))) {
          // try overwrite with text (may fail without permission)
          await navigator.clipboard.writeText('Screenshot blocked by site').catch(()=>{});
          log('Attempted to clear image from clipboard (permission-limited).');
          break;
        }
      }
    } catch (err) {
      // browsers often block read/write; ignore
      log('Clipboard clear attempt failed or not permitted.');
    }
  }

  window.addEventListener('keyup', function(e){
    const kc = e.keyCode || 0;
    const k = e.key ? e.key.toLowerCase() : '';
    if (kc === 44 || k === 'printscreen' || k === 'print') {
      tryClearClipboardImage();
      log('PrintScreen key detected (browser-level).');
    }
  });

  // 4) Visibility change -> blur content when tab not active (deterrent)
  document.addEventListener('visibilitychange', function(){
    if (document.hidden) {
      document.documentElement.style.filter = 'blur(6px)'; // soft blur
      log('Tab hidden: content blurred');
    } else {
      document.documentElement.style.filter = '';
      log('Tab visible: blur removed');
    }
  });

  // 5) Mobile: long-press / multi-touch block (best-effort)
  let touchStartTime = 0;
  document.addEventListener('touchstart', function(e){
    touchStartTime = Date.now();
    if (e.touches && e.touches.length > 1) {
      e.preventDefault();
      log('Multi-touch blocked');
    }
  }, { passive: false });

  document.addEventListener('touchend', function(e){
    const dt = Date.now() - touchStartTime;
    if (dt > 700) { // long press threshold
      e.preventDefault();
      log('Long press blocked');
    }
  }, { passive: false });

  // 6) Prevent common "save as" via drag/drop of images (optional)
  document.addEventListener('dragstart', function(e){
    e.preventDefault();
  }, true);

  // 7) OPTIONAL: prevent frame embedding (clickjacking mitigation)
  try {
    if (window.top !== window.self) {
      window.top.location = window.self.location;
    }
  } catch (err) {
    // ignore cross-origin
  }

  // small helper to disable selection via CSS fallback (in case JS disabled some parts)
  const css = '*{ -webkit-user-select:none !important; -moz-user-select:none !important; -ms-user-select:none !important; user-select:none !important; }';
  const style = document.createElement('style');
  style.appendChild(document.createTextNode(css));
  document.head.appendChild(style);

  log('Anti-capture script initialized');
})();
</script>

</body>


</html>
