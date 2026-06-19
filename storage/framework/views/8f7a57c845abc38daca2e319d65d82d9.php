<html>

<head>
  <title> Rhinofloor Email Template </title>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      margin: 0;
      color: #373737;
    }
  </style>
</head>

<body>

  <table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" bgcolor="#f5f5f5">
    <tbody>
      <tr>
        <td align="center">
          <table border="0" cellpadding="0" cellspacing="0"
            style="width:640px;max-width:640px;padding-right:20px;padding-left:20px; background-color: #fff !important; padding-top:20px;padding-bottom:20px;margin: 20px 0;">
            <tbody>
              <tr>
                <td>

                  <table class="table"
                    style="width:600px!important; margin:0 auto; padding-bottom: 15px; background: #fbfbfb;">
                    <tbody>
                      <tr style="width:100% !important; border-spacing: 0;">
                        <td>
                          <img class="logo" src="<?php echo e(asset('assets/img/mail/mg-logo.png')); ?>" alt="Logo"
                            style="max-width:130;">
                        </td>
                        <td style="text-align:right;padding: 10px 10px 10px 0;font-size:14px;">
                          <a href="mailto:sales@rhinofloor.ae"
                            style="margin:0 0 5px;text-decoration: none; color: #333; ">
                            <img src="<?php echo e(asset('assets/img/mail/mail.png')); ?>" alt="mail"
                              style="padding: 0 2px 0 0; width: 25px; margin-bottom: -8px;" alt="mail">
                            sales@rhinofloor.ae </a>
                          <p style="margin:0 0 5px; ">
                            <img src="<?php echo e(asset('assets/img/mail/phoe.png')); ?>" alt="phone"
                              style="padding: 0 2px 0 0; width: 25px; margin-bottom: -8px;" alt="phone">
                            <b>
                              <a href="tel:+97165264382" style="text-decoration: none; color: #333;"> +971 6 526 43 82
                              </a>
                            </b>
                          </p>
                        </td>
                      </tr>
                    </tbody>
                  </table>


                  <!-- Content Start -->
                  <table class="table" style="width:600px!important;margin:0 auto;">
                    <tbody>
                      <tr>
                        <td>
                          <div>&nbsp; &nbsp;</div>
                          <table border="0" cellspacing="0" cellpadding="0">
                            <tbody>
                              <tr>
                                <td>
                                  <h1>Hi Rhinofloor Team</h1>


                                  <p>You recieved an enquiry from website:</p>
                                  <table style="width:100%">

                                    <tbody>
                                      <tr>
                                        <td><strong>Name</strong></td>
                                        <td><?php echo e($data['name']); ?></td>
                                      </tr>
                                      <tr>
                                        <td><strong>Phone<strong></strong></strong></td>
                                        <td><a href="tel:<?php echo e($data['phone']); ?>"><?php echo e($data['phone']); ?></a> </td>
                                      </tr>
                                      <tr>
                                        <td><strong>Email</strong></td>
                                        <td><a href="mailto:<?php echo e($data['email']); ?>"
                                            target="_blank"><?php echo e($data['email']); ?></a></td>
                                      </tr>
                                      
                                      <tr>
                                        <td><strong>Message</strong></td>
                                        <td><?php echo e($data['message']); ?></td>
                                      </tr>
                                    </tbody>
                                  </table><br>

                                  <p>
                                    <a>Thanks &amp; Regards</a>
                                  </p>
                                  <p><?php echo e($data['name']); ?></p>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          <div>&nbsp;</div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <!--// Content End -->

                  <!-- footer start -->

                  <!-- connect with us start -->
                  <table style="width: 100%; border-spacing: 0;">
                    <tr>
                      <td style="width: 100%;   padding: 15px; text-align: center; background: #252525; color: #fff;">
                        <p> Connect With US </p>
                        <a href="https://www.facebook.com/people/Rhino-Floor/100063764514991/" target="
                       "> <img src="<?php echo e(asset('assets/img/mail/facebook.png')); ?>" style="width: 25px;" alt=""> </a>
                        <a href="https://www.instagram.com/rhino.floor/?igshid=k4kzc88x9zrl" target="b
                      "> <img src="<?php echo e(asset('assets/img/mail/instagram.png')); ?>" style="width: 25px;" alt=""> </a>
                        <a href="https://www.linkedin.com/company/rhino-floor/?originalSubdomain=ae" target="
                      "> <img src="<?php echo e(asset('assets/img/mail/linked.png')); ?>" style="width: 25px;" alt=""> </a>
                      </td>
                    </tr>
                  </table>
                  <!--// connect with us end -->


                  <!-- footer logo start -->
                  <table style="width: 100%; border-spacing: 0;">
                    <tr>
                      <td style="width:100%; text-align: center;">
                        <img src="<?php echo e(asset('assets/img/mail/mg-fooetr-logo.png')); ?>" alt="logo"
                          style="width: 80px; max-width: 80px; margin-top: 30px; margin-bottom: 20px;">
                      </td>
                    </tr>
                  </table>
                  <!--// footer logo end -->


                  <!-- footer address start -->
                  <table style="width: 100%; border-spacing: 0;">
                    <tr>
                      <td style="width:100%; text-align: center;">
                        <p> York Engineering Solution FZC </p>
                        <a> OFFICE NO. LV-27D </a>
                        <a> -- </a>
                        <a> PO BOX 42167 </a>
                        <p>
                          <a> HAMRIYAH FREE ZONE PHASE 2 </a>
                          <a> -- </a>
                          <a> SHARJAH, UAE </a>
                        </p>
                      </td>
                    </tr>
                  </table>


                  <table style="width: 100%; border-spacing: 0; padding: 15px  0;">
                    <tr>
                      <td style="text-align: center; width: 100%;">
                        <p>
                          <a href="tel:+97165264382" style=" text-decoration: none; color: #333;"> Tel: +971 6 52 643 82
                          </a>
                          <a> -- </a>
                          <a href="#" style=" text-decoration: none; color: #333;"> Fax: +971 6 52 643 84 </a>
                        </p>


                      </td>
                    </tr>

                  </table>



                  <table
                    style="width: 100%; border-spacing: 0; padding: 6px 0; background: #f4a81d; letter-spacing: 2px; font-size: 13px;">
                    <tr>
                      <td style="width: 100%; text-align: center;">
                        <a href="https://www.bigleap.ae/" target="_
                        " style="text-decoration: none; color: #fff; margin: 0;"> www.bigleap.com </a>
                      </td>
                    </tr>
                  </table>
                  <!--// footer address end -->

                  <!--// footer End -->



                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
  </table>

</body>

</html><?php /**PATH /home2/hcoyym1o/therhinofloor.com/resources/views/emails/mailEnquiry.blade.php ENDPATH**/ ?>