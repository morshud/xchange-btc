<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>WorldXchangeTrade</title>
  <style type="text/css">
  /* -------------------------------------
    GLOBAL
  ------------------------------------- */
  * {
    margin:0;
    padding:0;
    font-family: Helvetica, Arial, sans-serif;
  }

  img {
    max-width: 100%;
    outline: none;
    text-decoration: none;
    -ms-interpolation-mode: bicubic;
  }
  .image-fix {
    display:block;
  }
  .collapse {
    margin:0;
    padding:0;
  }
  body {
    -webkit-font-smoothing:antialiased;
    -webkit-text-size-adjust:none;
    width: 100%!important;
    height: 100%;
    text-align: center;
    color: #747474;
    background-color: #ffffff;
  }
  h1,h2,h3,h4,h5,h6 {
    font-family: Helvetica, Arial, sans-serif;
    line-height: 1.1;
  }
  h1 small, h2 small, h3 small, h4 small, h5 small, h6 small {
    font-size: 60%;
    line-height: 0;
    text-transform: none;
  }

  h1 {
    font-weight:200;
    font-size: 44px;
  }
  h2 {
    font-weight:200;
    font-size: 32px;
    margin-bottom: 14px;
  }
  h3 {
    font-weight:500;
    font-size: 27px;
  }
  h4 {
    font-weight:500;
    font-size: 23px;
  }
  h5 {
    font-weight:900;
    font-size: 17px;
  }
  h6 {
    font-weight:900;
    font-size: 14px;
    text-transform: uppercase;
  }

  .collapse {
    margin: 0 !important;
  }

  td, div {
    font-family: Helvetica, Arial, sans-serif;
    text-align: center;
  }

  p, ul {
    margin-bottom: 10px;
    font-weight: normal;
    font-size:14px;
    line-height:1.6;
  }
  p.lead {
    font-size:17px;
  }
  p.last {
    margin-bottom:0px;
  }

  ul li {
    margin-left:5px;
    list-style-position: inside;
  }

  a {
    color: #747474;
    text-decoration: none;
  }

  a img {
    border: none;
  }

  /* -------------------------------------
      ELEMENTS
  ------------------------------------- */


  table.head-wrap {
    width: 100%;
    margin: 0 auto;
    background-color: #f9f8f8;
    border-bottom: 1px solid #d8d8d8;
  }

  .head-wrap * {
    margin: 0;
    padding: 0;
  }

  .header-background {
    background: #002347;
  }


  .header {
    height: 42px;
  }
  .header .content {
    padding: 0;
  }
  .header .brand {
    text-align: center;
    font-size: 16px;
    line-height: 42px;
    font-weight: bold;
  }
  .header .brand a {
    color: #fff;
  }





  table.body-wrap {
    width: 505px;
    margin: 0 auto;
    background-color: #ffffff;
  }


  .soapbox .soapbox-title {
    font-size: 30px;
    color: #464646;
    padding-top: 25px;
    padding-bottom: 28px;
  }

  .content .status {
    width: 90%;
  }

  .status {
    border-collapse: collapse;
    margin-left: 15px;
    color: #656565;
  }
  .status .status-cell {
    border: 1px solid #b3b3b3;
    height: 50px;
    font-size: 16px;
    line-height: 23px;
  }
  .status .status-cell.success,
  .status .status-cell.active {
    height: 65px;
  }
  .status .status-cell.success {
    background: #f2ffeb;
    color: #51da42;
    font-size: 15px;
  }
  .status .status-cell.active {
    background: #fffde0;
    width: 135px;
  }
  .status .status-image {
    vertical-align: text-bottom;
  }


  .body .body-padded,
  .body .body-padding {
    padding-top: 34px;
  }
  .body .body-padding {
    width: 41px;
  }
  .body-padded,
  .body-title {
    text-align: left;
  }
  .body .body-title {
    font-weight: bold;
    font-size: 17px;
    color: #464646;
  }
  .body .body-text .body-text-cell {
    text-align: left;
    font-size: 14px;
    line-height: 1.6;
    padding: 9px 0 17px;
  }
  .body .body-signature-block .body-signature-cell {
    padding: 25px 0 30px;
    text-align: left;
  }
  .body .body-signature {
    font-family: "Comic Sans MS", Textile, cursive;
    font-weight: bold;
  }



  .footer-wrap {
    width: 100%;
    margin: 0 auto;
    clear: both !important;
    background-color: #e5e5e5;
    border-top: 1px solid #b3b3b3;
    font-size: 12px;
    color: #656565;
    line-height: 30px;
  }
  .footer-wrap td {
    padding: 14px 0;
  }
  .footer-wrap td .content {
    padding: 0;
  }
  .footer-wrap td .footer-lead {
    font-size: 14px;
  }
  .footer-wrap td .footer-lead a {
    font-size: 14px;
    font-weight: bold;
    color: #535353;
  }
  .footer-wrap td a {
    font-size: 12px;
    color: #656565;
  }
  .footer-wrap td a.last {
    margin-right: 0;
  }
  .footer-wrap .footer-group {
    display: inline-block;
  }



  /* ---------------------------------------------------
      RESPONSIVENESS
  ------------------------------------------------------ */

  /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
  .container {
    display: block !important;
    max-width: 505px !important;
    clear: both !important;
  }

  /* This should also be a block element, so that it will fill 100% of the .container */
  .content {
    padding: 0;
    max-width: 505px;
    margin: 0 auto;
    display: block;
  }

  /* Let's make sure tables in the content area are 100% wide */
  .content table {
    width: 100%;
  }


  /* Be sure to place a .clear element after each set of columns, just to be safe */
  .clear {
    display: block;
    clear: both;
  }

  table.full-width-gmail-android {
    width: 100% !important;
  }

</style>
<style type="text/css" media="only screen">


  /* -------------------------------------------
      PHONE
      For clients that support media queries.
      Nothing fancy.
  -------------------------------------------- */
  @media only screen {

    table[class="head-wrap"],
    table[class="body-wrap"],
    table[class*="footer-wrap"] {
      width: 100% !important;
    }

    td[class*="container"] {
      margin: 0 auto !important;
    }
  }

  @media only screen and (max-width: 505px) {

    *[class*="w320"] {
      width: 320px !important;
    }

    table[class="status"] td[class*="status-cell"],
    table[class="status"] td[class*="status-cell"].active {
      display: block !important;
      width: auto !important;
      height: auto !important;
      padding: 15px !important;
      font-size: 18px !important;
    }

  }
  </style>
</head>

<body bgcolor="#ffffff">

  <div align="center">
    <table class="head-wrap w320 full-width-gmail-android" bgcolor="#f9f8f8" cellpadding="0" cellspacing="0" border="0">
      <tr>
        <td background="https://www.filepicker.io/api/file/UOesoVZTFObSHCgUDygC" bgcolor="#ffffff" width="100%" height="8" valign="top">
          <!--[if gte mso 9]>
          <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="mso-width-percent:1000;height:8px;">
            <v:fill type="tile" src="https://www.filepicker.io/api/file/UOesoVZTFObSHCgUDygC" color="#ffffff" />
            <v:textbox inset="0,0,0,0">
          <![endif]-->
          <div height="8">
          </div>
          <!--[if gte mso 9]>
            </v:textbox>
          </v:rect>
          <![endif]-->
        </td>
      </tr>
      <tr class="header-background">
        <td class="header container" align="center">
          <div class="content">
            <span class="brand">
              <a href="https://worldxchangetrade.com">
                Venus16xchange
              </a>
            </span>
          </div>
        </td>
      </tr>
    </table>
    <h5><b>From:</b> {{ $data['name'] }} </h5>
    <h5><b>Email:</b> {{ $data['email'] }}</h5>
    <h5><b>Telephone:</b> {{ $data['phone'] }}</h5>
    <table class="body-wrap w320">
      <tr>
        <td></td>
        <td class="container">
          <div class="content">
            <table cellspacing="0">
              <tr>
                <td>
                  <table class="soapbox">
                    <tr>
                      <td class="soapbox-title">FeedBack</td>
                    </tr>
                  </table>
                  <table class="body">
                    <tr>
                      <td class="body-padding"></td>
                      <td class="body-padded">
                        <div class="body-title">Message</div>
                        <table class="body-text">
                          <tr>
                            <td class="body-text-cell">
                              {{ $data['message'] }}
                            </td>
                          </tr>
                        </table>

                        <div><!--[if mso]>
                            <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="#" style="height:38px;v-text-anchor:middle;width:210px;" arcsize="10%" strokecolor="#407429" fill="t">
                            <v:fill type="tile" src="https://www.filepicker.io/api/file/N8GiNGsmT6mK6ORk00S7" color="#41CC00" />
                            <w:anchorlock/>
                            <center style="color:#ffffff;font-family:sans-serif;font-size:17px;font-weight:bold;">Add more info here</center>
                          </v:roundrect>
                        <![endif]-->

                        <table class="body-signature-block">
                          <tr>
                            <td class="body-signature-cell">
                              <p>Thanks so much,</p>
                              <p class="body-signature">venus16xchange.com</p>
                            </td>
                          </tr>
                        </table>
                      </td>
                      <td class="body-padding"></td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </div>
        </td>
        <td></td>
      </tr>
    </table>

    <table class="footer-wrap w320 full-width-gmail-android" bgcolor="#e5e5e5">
      <tr>
        <td>
          <div class="content footer-lead">
            <a href="https://venus16xchange.com"><b>Get in touch</b></a> if you have any questions or feedback
          </div>
        </td>
      </tr>
    </table>
    <table class="footer-wrap w320 full-width-gmail-android" bgcolor="#e5e5e5">
      <tr>
        <td>
          <div class="content">
            <a href="#">Contact Us</a>&nbsp;&nbsp;|&nbsp;&nbsp;
            <span class="footer-group">
              <a href="#">Facebook</a>&nbsp;&nbsp;|&nbsp;&nbsp;
              <a href="#">Twitter</a>&nbsp;&nbsp;|&nbsp;&nbsp;
              <a href="#">Support</a>
            </span>
          </div>
        </td>
      </tr>
    </table>
  </div>

</body>
</html>