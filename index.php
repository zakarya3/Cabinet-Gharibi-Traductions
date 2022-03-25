<?php
  error_reporting(0);
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  require './PHPMailer-master/src/Exception.php';
  require './PHPMailer-master/src/PHPMailer.php';
  require './PHPMailer-master/src/SMTP.php';
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Name  = $_POST["Name"];
    $Email  = $_POST["Email"];
    $Message = $_POST["Message"];
    $date = date("Y-m-d H:i:s");
    if ($Name && $Email && $Message) {
      $html = '
  <html
      xmlns="http://www.w3.org/1999/xhtml"
      xmlns:o="urn:schemas-microsoft-com:office:office"
      style="
        width: 100%;
        font-family: `open sans`, `helvetica neue`, helvetica, arial, sans-serif;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
        padding: 0;
        margin: 0;
      "
      >
      <head>
        <meta charset="UTF-8" />
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta name="x-apple-disable-message-reformatting" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta content="telephone=no" name="format-detection" />
        <title>Nouveau message 2</title>
        <!--[if (mso 16)
          ]><style type="text/css">
            a {
              text-decoration: none;
            }
          </style><!
        [endif]-->
        <!--[if gte mso 9
          ]><style>
            sup {
              font-size: 100% !important;
            }
          </style><!
        [endif]-->
        <!--[if gte mso 9
          ]><xml>
            <o:OfficeDocumentSettings>
              <o:AllowPNG></o:AllowPNG> <o:PixelsPerInch>96</o:PixelsPerInch>
            </o:OfficeDocumentSettings>
          </xml><!
        [endif]-->
        <!--[if !mso]><!-- -->
        <link
          href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i"
          rel="stylesheet"
        />
        <!--<![endif]-->
        <style type="text/css">
          #outlook a {
            padding: 0;
          }
          .ExternalClass {
            width: 100%;
          }
          .ExternalClass,
          .ExternalClass p,
          .ExternalClass span,
          .ExternalClass font,
          .ExternalClass td,
          .ExternalClass div {
            line-height: 100%;
          }
          .es-button {
            mso-style-priority: 100 !important;
            text-decoration: none !important;
          }
          a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
          }
          .es-desk-hidden {
            display: none;
            float: left;
            overflow: hidden;
            width: 0;
            max-height: 0;
            line-height: 0;
            mso-hide: all;
          }
          [data-ogsb] .es-button {
            border-width: 0 !important;
            padding: 15px 30px 15px 30px !important;
          }
          @media only screen and (max-width: 600px) {
            p,
            ul li,
            ol li,
            a {
              line-height: 150% !important;
            }
            h1,
            h2,
            h3,
            h1 a,
            h2 a,
            h3 a {
              line-height: 120% !important;
            }
            h1 {
              font-size: 32px !important;
              text-align: center;
            }
            h2 {
              font-size: 26px !important;
              text-align: center;
            }
            h3 {
              font-size: 20px !important;
              text-align: center;
            }
            .es-header-body h1 a,
            .es-content-body h1 a,
            .es-footer-body h1 a {
              font-size: 32px !important;
            }
            .es-header-body h2 a,
            .es-content-body h2 a,
            .es-footer-body h2 a {
              font-size: 26px !important;
            }
            .es-header-body h3 a,
            .es-content-body h3 a,
            .es-footer-body h3 a {
              font-size: 20px !important;
            }
            .es-menu td a {
              font-size: 16px !important;
            }
            .es-header-body p,
            .es-header-body ul li,
            .es-header-body ol li,
            .es-header-body a {
              font-size: 16px !important;
            }
            .es-content-body p,
            .es-content-body ul li,
            .es-content-body ol li,
            .es-content-body a {
              font-size: 16px !important;
            }
            .es-footer-body p,
            .es-footer-body ul li,
            .es-footer-body ol li,
            .es-footer-body a {
              font-size: 16px !important;
            }
            .es-infoblock p,
            .es-infoblock ul li,
            .es-infoblock ol li,
            .es-infoblock a {
              font-size: 12px !important;
            }
            *[class="gmail-fix"] {
              display: none !important;
            }
            .es-m-txt-c,
            .es-m-txt-c h1,
            .es-m-txt-c h2,
            .es-m-txt-c h3 {
              text-align: center !important;
            }
            .es-m-txt-r,
            .es-m-txt-r h1,
            .es-m-txt-r h2,
            .es-m-txt-r h3 {
              text-align: right !important;
            }
            .es-m-txt-l,
            .es-m-txt-l h1,
            .es-m-txt-l h2,
            .es-m-txt-l h3 {
              text-align: left !important;
            }
            .es-m-txt-r img,
            .es-m-txt-c img,
            .es-m-txt-l img {
              display: inline !important;
            }
            .es-button-border {
              display: inline-block !important;
            }
            a.es-button,
            button.es-button {
              font-size: 16px !important;
              display: inline-block !important;
              border-width: 15px 30px 15px 30px !important;
            }
            .es-btn-fw {
              border-width: 10px 0px !important;
              text-align: center !important;
            }
            .es-adaptive table,
            .es-btn-fw,
            .es-btn-fw-brdr,
            .es-left,
            .es-right {
              width: 100% !important;
            }
            .es-content table,
            .es-header table,
            .es-footer table,
            .es-content,
            .es-footer,
            .es-header {
              width: 100% !important;
              max-width: 600px !important;
            }
            .es-adapt-td {
              display: block !important;
              width: 100% !important;
            }
            .adapt-img {
              width: 100% !important;
              height: auto !important;
            }
            .es-m-p0 {
              padding: 0px !important;
            }
            .es-m-p0r {
              padding-right: 0px !important;
            }
            .es-m-p0l {
              padding-left: 0px !important;
            }
            .es-m-p0t {
              padding-top: 0px !important;
            }
            .es-m-p0b {
              padding-bottom: 0 !important;
            }
            .es-m-p20b {
              padding-bottom: 20px !important;
            }
            .es-mobile-hidden,
            .es-hidden {
              display: none !important;
            }
            tr.es-desk-hidden,
            td.es-desk-hidden,
            table.es-desk-hidden {
              width: auto !important;
              overflow: visible !important;
              float: none !important;
              max-height: inherit !important;
              line-height: inherit !important;
            }
            tr.es-desk-hidden {
              display: table-row !important;
            }
            table.es-desk-hidden {
              display: table !important;
            }
            td.es-desk-menu-hidden {
              display: table-cell !important;
            }
            .es-menu td {
              width: 1% !important;
            }
            table.es-table-not-adapt,
            .esd-block-html table {
              width: auto !important;
            }
            table.es-social {
              display: inline-block !important;
            }
            table.es-social td {
              display: inline-block !important;
            }
          }
        </style>
      </head>
      <body
        style="
          width: 100%;
          font-family: `open sans`, `helvetica neue`, helvetica, arial, sans-serif;
          -webkit-text-size-adjust: 100%;
          -ms-text-size-adjust: 100%;
          padding: 0;
          margin: 0;
        "
      >
        <div class="es-wrapper-color" style="background-color: #eeeeee">
          <!--[if gte mso 9
            ]><v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
              <v:fill type="tile" color="#eeeeee"></v:fill> </v:background
          ><![endif]-->
          <table
            class="es-wrapper"
            width="100%"
            cellspacing="0"
            cellpadding="0"
            style="
              mso-table-lspace: 0pt;
              mso-table-rspace: 0pt;
              border-collapse: collapse;
              border-spacing: 0px;
              padding: 0;
              margin: 0;
              width: 100%;
              height: 100%;
              background-repeat: repeat;
              background-position: center top;
            "
          >
            <tbody>
              <tr style="border-collapse: collapse">
                <td valign="top" style="padding: 0; margin: 0">
                  <table
                    class="es-content"
                    cellspacing="0"
                    cellpadding="0"
                    align="center"
                    style="
                      mso-table-lspace: 0pt;
                      mso-table-rspace: 0pt;
                      border-collapse: collapse;
                      border-spacing: 0px;
                      table-layout: fixed !important;
                      width: 100%;
                    "
                  >
                    <tbody>
                      <tr style="border-collapse: collapse"></tr>
                      <tr style="border-collapse: collapse">
                        <td align="center" style="padding: 0; margin: 0">
                          <table
                            class="es-header-body"
                            style="
                              mso-table-lspace: 0pt;
                              mso-table-rspace: 0pt;
                              border-collapse: collapse;
                              border-spacing: 0px;
                              background-color: #333333;
                              width: 800px;
                            "
                            cellspacing="0"
                            cellpadding="0"
                            bgcolor="#333333"
                            align="center"
                          >
                            <tbody>
                              <tr style="border-collapse: collapse">
                                <td
                                  align="left"
                                  style="
                                    margin: 0;
                                    padding-top: 35px;
                                    padding-bottom: 35px;
                                    padding-left: 35px;
                                    padding-right: 35px;
                                  "
                                >
                                  <!--[if mso]><table style="width:730px" cellpadding="0" cellspacing="0"><tr><td style="width:440px" valign="top"><![endif]-->
                                  <table
                                    class="es-left"
                                    cellspacing="0"
                                    cellpadding="0"
                                    align="left"
                                    style="
                                      mso-table-lspace: 0pt;
                                      mso-table-rspace: 0pt;
                                      border-collapse: collapse;
                                      border-spacing: 0px;
                                      float: left;
                                    "
                                  >
                                    <tbody>
                                      <tr style="border-collapse: collapse">
                                        <td
                                          class="es-m-p0r es-m-p20b"
                                          valign="top"
                                          align="center"
                                          style="
                                            padding: 0;
                                            margin: 0;
                                            width: 440px;
                                          "
                                        >
                                          <table
                                            width="100%"
                                            cellspacing="0"
                                            cellpadding="0"
                                            role="presentation"
                                            style="
                                              mso-table-lspace: 0pt;
                                              mso-table-rspace: 0pt;
                                              border-collapse: collapse;
                                              border-spacing: 0px;
                                            "
                                          >
                                            <tbody>
                                              <tr style="border-collapse: collapse">
                                                <td
                                                  align="left"
                                                  style="
                                                    padding: 0;
                                                    margin: 0;
                                                    font-size: 0px;
                                                  "
                                                >
                                                  <img
                                                    class="adapt-img"
                                                    src="https://gharibitraductions.com/images/logo.png"
                                                    alt=""
                                                    style="
                                                      display: block;
                                                      border: 0;
                                                      outline: none;
                                                      text-decoration: none;
                                                      -ms-interpolation-mode: bicubic;
                                                    "
                                                    width="80"
                                                  />
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  <!--[if mso]></td><td style="width:20px"></td>
      <td style="width:270px" valign="top"><![endif]-->
                                  <table
                                    cellspacing="0"
                                    cellpadding="0"
                                    align="right"
                                    style="
                                      mso-table-lspace: 0pt;
                                      mso-table-rspace: 0pt;
                                      border-collapse: collapse;
                                      border-spacing: 0px;
                                    "
                                  >
                                    <tbody>
                                      <tr
                                        class="es-hidden"
                                        style="border-collapse: collapse"
                                      >
                                        <td
                                          class="es-m-p20b"
                                          align="left"
                                          style="
                                            padding: 0;
                                            margin: 0;
                                            width: 270px;
                                          "
                                        >
                                          <table
                                            width="100%"
                                            cellspacing="0"
                                            cellpadding="0"
                                            role="presentation"
                                            style="
                                              mso-table-lspace: 0pt;
                                              mso-table-rspace: 0pt;
                                              border-collapse: collapse;
                                              border-spacing: 0px;
                                            "
                                          >
                                            <tbody>
                                              <tr
                                                style="border-collapse: collapse"
                                              ></tr>
                                              <tr style="border-collapse: collapse">
                                                <td style="padding: 0; margin: 0">
                                                  <table
                                                    cellspacing="0"
                                                    cellpadding="0"
                                                    align="right"
                                                    role="presentation"
                                                    style="
                                                      mso-table-lspace: 0pt;
                                                      mso-table-rspace: 0pt;
                                                      border-collapse: collapse;
                                                      border-spacing: 0px;
                                                    "
                                                  >
                                                    <tbody>
                                                      <tr
                                                        style="
                                                          border-collapse: collapse;
                                                        "
                                                      >
                                                        <td
                                                          align="left"
                                                          style="
                                                            padding: 0;
                                                            margin: 0;
                                                          "
                                                        >
                                                          <table
                                                            width="100%"
                                                            cellspacing="0"
                                                            cellpadding="0"
                                                            role="presentation"
                                                            style="
                                                              mso-table-lspace: 0pt;
                                                              mso-table-rspace: 0pt;
                                                              border-collapse: collapse;
                                                              border-spacing: 0px;
                                                            "
                                                          >
                                                          </table>
                                                        </td>
                                                      </tr>
                                                    </tbody>
                                                  </table>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  <!--[if mso]></td></tr></table><![endif]-->
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <table
                    class="es-content"
                    cellspacing="0"
                    cellpadding="0"
                    align="center"
                    style="
                      mso-table-lspace: 0pt;
                      mso-table-rspace: 0pt;
                      border-collapse: collapse;
                      border-spacing: 0px;
                      table-layout: fixed !important;
                      width: 100%;
                    "
                  >
                    <tbody>
                      <tr style="border-collapse: collapse">
                        <td align="center" style="padding: 0; margin: 0">
                          <table
                            class="es-content-body"
                            cellspacing="0"
                            cellpadding="0"
                            bgcolor="#ffffff"
                            align="center"
                            style="
                              mso-table-lspace: 0pt;
                              mso-table-rspace: 0pt;
                              border-collapse: collapse;
                              border-spacing: 0px;
                              background-color: #ffffff;
                              width: 800px;
                            "
                          >
                            <tbody>
                              <tr style="border-collapse: collapse">
                                <td
                                  align="left"
                                  style="
                                    padding: 0;
                                    margin: 0;
                                    padding-left: 35px;
                                    padding-right: 35px;
                                    padding-top: 40px;
                                  "
                                >
                                  <table
                                    width="100%"
                                    cellspacing="0"
                                    cellpadding="0"
                                    style="
                                      mso-table-lspace: 0pt;
                                      mso-table-rspace: 0pt;
                                      border-collapse: collapse;
                                      border-spacing: 0px;
                                    "
                                  >
                                    <tbody>
                                      <tr style="border-collapse: collapse">
                                        <td
                                          valign="top"
                                          align="center"
                                          style="
                                            padding: 0;
                                            margin: 0;
                                            width: 730px;
                                          "
                                        >
                                          <table
                                            width="100%"
                                            cellspacing="0"
                                            cellpadding="0"
                                            role="presentation"
                                            style="
                                              mso-table-lspace: 0pt;
                                              mso-table-rspace: 0pt;
                                              border-collapse: collapse;
                                              border-spacing: 0px;
                                            "
                                          >
                                            <tbody>
                                              <tr style="border-collapse: collapse">
                                                <td
                                                  align="center"
                                                  style="
                                                    margin: 0;
                                                    padding-top: 25px;
                                                    padding-bottom: 25px;
                                                    padding-left: 35px;
                                                    padding-right: 35px;
                                                    font-size: 0px;
                                                  "
                                                >
                                                  <a
                                                    target="_blank"
                                                    href="https://viewstripo.email/"
                                                    style="
                                                      -webkit-text-size-adjust: none;
                                                      -ms-text-size-adjust: none;
                                                      mso-line-height-rule: exactly;
                                                      text-decoration: none;
                                                      color: #ed8e20;
                                                      font-size: 16px;
                                                    "
                                                    ><img
                                                      src="https://kkfquc.stripocdn.email/content/guids/CABINET_1ccc329967a633a55057a2b4c5667570/images/message_1.png"
                                                      alt=""
                                                      style="
                                                        display: block;
                                                        border: 0;
                                                        outline: none;
                                                        text-decoration: none;
                                                        -ms-interpolation-mode: bicubic;
                                                      "
                                                      width="120"
                                                      height="120"
                                                  /></a>
                                                </td>
                                              </tr>
                                              <tr style="border-collapse: collapse">
                                                <td
                                                  align="center"
                                                  style="
                                                    padding: 0;
                                                    margin: 0;
                                                    padding-bottom: 10px;
                                                  "
                                                >
                                                  <h2
                                                    style="
                                                      margin: 0;
                                                      line-height: 36px;
                                                      mso-line-height-rule: exactly;
                                                      font-family: `open sans`,
                                                        `helvetica neue`, helvetica,
                                                        arial, sans-serif;
                                                      font-size: 30px;
                                                      font-style: normal;
                                                      font-weight: bold;
                                                      color: #333333;
                                                    "
                                                  >
                                                  Vous avez reçu un NOUVEAU message de
                                                    ' . $Name . '
                                                  </h2>
                                                </td>
                                              </tr>
                                              <tr style="border-collapse: collapse">
                                                <td
                                                  style="
                                                    padding: 0;
                                                    margin: 0;
                                                    padding-bottom: 25px;
                                                    padding-top: 40px;
                                                  "
                                                >
                                                  <p
                                                    style="
                                                      margin: 0;
                                                      -webkit-text-size-adjust: none;
                                                      -ms-text-size-adjust: none;
                                                      mso-line-height-rule: exactly;
                                                      font-family: `open sans`,
                                                        `helvetica neue`, helvetica,
                                                        arial, sans-serif;
                                                      line-height: 24px;
                                                      color: #333333;
                                                      font-size: 16px;
                                                      text-align: justify;
                                                    "
                                                  >
                                                   ' .$Message. '
                                                  </p>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <table
                    class="es-content"
                    cellspacing="0"
                    cellpadding="0"
                    align="center"
                    style="
                      mso-table-lspace: 0pt;
                      mso-table-rspace: 0pt;
                      border-collapse: collapse;
                      border-spacing: 0px;
                      table-layout: fixed !important;
                      width: 100%;
                    "
                  >
                    <tbody>
                      <tr style="border-collapse: collapse">
                        <td align="center" style="padding: 0; margin: 0">
                          <table
                            class="es-content-body"
                            cellspacing="0"
                            cellpadding="0"
                            bgcolor="#ffffff"
                            align="center"
                            style="
                              mso-table-lspace: 0pt;
                              mso-table-rspace: 0pt;
                              border-collapse: collapse;
                              border-spacing: 0px;
                              background-color: #ffffff;
                              width: 800px;
                            "
                          >
                            <tbody>
                              <tr style="border-collapse: collapse">
                                <td
                                  align="left"
                                  style="
                                    padding: 0;
                                    margin: 0;
                                    padding-top: 20px;
                                    padding-left: 35px;
                                    padding-right: 35px;
                                  "
                                >
                                  <table
                                    width="100%"
                                    cellspacing="0"
                                    cellpadding="0"
                                    style="
                                      mso-table-lspace: 0pt;
                                      mso-table-rspace: 0pt;
                                      border-collapse: collapse;
                                      border-spacing: 0px;
                                    "
                                  >
                                    <tbody>
                                      <tr style="border-collapse: collapse">
                                        <td
                                          valign="top"
                                          align="center"
                                          style="
                                            padding: 0;
                                            margin: 0;
                                            width: 730px;
                                          "
                                        >
                                          <table
                                            width="100%"
                                            cellspacing="0"
                                            cellpadding="0"
                                            role="presentation"
                                            style="
                                              mso-table-lspace: 0pt;
                                              mso-table-rspace: 0pt;
                                              border-collapse: collapse;
                                              border-spacing: 0px;
                                            "
                                          >
                                            <tbody>
                                              <tr style="border-collapse: collapse">
                                                <td
                                                  bgcolor="#eeeeee"
                                                  align="left"
                                                  style="
                                                    margin: 0;
                                                    padding-top: 10px;
                                                    padding-bottom: 10px;
                                                    padding-left: 10px;
                                                    padding-right: 10px;
                                                  "
                                                >
                                                  <table
                                                    style="
                                                      mso-table-lspace: 0pt;
                                                      mso-table-rspace: 0pt;
                                                      border-collapse: collapse;
                                                      border-spacing: 0px;
                                                      width: 500px;
                                                    "
                                                    class="cke_show_border"
                                                    cellspacing="1"
                                                    cellpadding="1"
                                                    border="0"
                                                    align="left"
                                                    role="presentation"
                                                  >
                                                    <tbody>
                                                      <tr
                                                        style="
                                                          border-collapse: collapse;
                                                        "
                                                      >
                                                        <td
                                                          width="80%"
                                                          style="
                                                            padding: 0;
                                                            margin: 0;
                                                          "
                                                        >
                                                          <h4
                                                            style="
                                                              margin: 0;
                                                              line-height: 120%;
                                                              mso-line-height-rule: exactly;
                                                              font-family: `open
                                                                  sans`,
                                                                `helvetica neue`,
                                                                helvetica, arial,
                                                                sans-serif;
                                                            "
                                                          >
                                                            Détails du message personnel
                                                            :
                                                          </h4>
                                                        </td>
                                                        <td
                                                          width="20%"
                                                          style="
                                                            padding: 0;
                                                            margin: 0;
                                                          "
                                                        >
                                                          <h4
                                                            style="
                                                              margin: 0;
                                                              line-height: 120%;
                                                              mso-line-height-rule: exactly;
                                                              font-family: `open
                                                                  sans`,
                                                                `helvetica neue`,
                                                                helvetica, arial,
                                                                sans-serif;
                                                            "
                                                          >
                                                            <br />
                                                          </h4>
                                                        </td>
                                                      </tr>
                                                    </tbody>
                                                  </table>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                              <tr style="border-collapse: collapse">
                                <td
                                  align="left"
                                  style="
                                    padding: 0;
                                    margin: 0;
                                    padding-left: 35px;
                                    padding-right: 35px;
                                  "
                                >
                                  <table
                                    width="100%"
                                    cellspacing="0"
                                    cellpadding="0"
                                    style="
                                      mso-table-lspace: 0pt;
                                      mso-table-rspace: 0pt;
                                      border-collapse: collapse;
                                      border-spacing: 0px;
                                    "
                                  >
                                    <tbody>
                                      <tr style="border-collapse: collapse">
                                        <td
                                          valign="top"
                                          align="center"
                                          style="
                                            padding: 0;
                                            margin: 0;
                                            width: 730px;
                                          "
                                        >
                                          <table
                                            width="100%"
                                            cellspacing="0"
                                            cellpadding="0"
                                            role="presentation"
                                            style="
                                              mso-table-lspace: 0pt;
                                              mso-table-rspace: 0pt;
                                              border-collapse: collapse;
                                              border-spacing: 0px;
                                            "
                                          >
                                            <tbody>
                                              <tr style="border-collapse: collapse">
                                                <td
                                                  align="left"
                                                  style="
                                                    margin: 0;
                                                    padding-top: 10px;
                                                    padding-bottom: 10px;
                                                    padding-left: 10px;
                                                    padding-right: 10px;
                                                  "
                                                >
                                                  <table
                                                    style="
                                                      mso-table-lspace: 0pt;
                                                      mso-table-rspace: 0pt;
                                                      border-collapse: collapse;
                                                      border-spacing: 0px;
                                                      width: 500px;
                                                    "
                                                    class="cke_show_border"
                                                    cellspacing="1"
                                                    cellpadding="1"
                                                    border="0"
                                                    align="left"
                                                    role="presentation"
                                                  >
                                                    <tbody>
                                                      <tr
                                                        style="
                                                          border-collapse: collapse;
                                                        "
                                                      >
                                                        <td
                                                          style="
                                                            padding: 5px 10px 5px 0;
                                                            margin: 0;
                                                          "
                                                          width="80%"
                                                          align="left"
                                                        >
                                                          <p
                                                            style="
                                                              margin: 0;
                                                              -webkit-text-size-adjust: none;
                                                              -ms-text-size-adjust: none;
                                                              mso-line-height-rule: exactly;
                                                              font-family: `open
                                                                  sans`,
                                                                `helvetica neue`,
                                                                helvetica, arial,
                                                                sans-serif;
                                                              line-height: 24px;
                                                              color: #333333;
                                                              font-size: 16px;
                                                            "
                                                          >
                                                            Email Address
                                                          </p>
                                                        </td>
                                                        <td
                                                          style="
                                                            padding: 5px 0;
                                                            margin: 0;
                                                          "
                                                          width="20%"
                                                          align="left"
                                                        >
                                                          <p
                                                            style="
                                                              margin: 0;
                                                              -webkit-text-size-adjust: none;
                                                              -ms-text-size-adjust: none;
                                                              mso-line-height-rule: exactly;
                                                              font-family: `open
                                                                  sans`,
                                                                `helvetica neue`,
                                                                helvetica, arial,
                                                                sans-serif;
                                                              line-height: 24px;
                                                              color: #333333;
                                                              font-size: 16px;
                                                            "
                                                          >
                                                            ' . $Email . '
                                                          </p>
                                                        </td>
                                                      </tr>
                                                      <tr
                                                        style="
                                                          border-collapse: collapse;
                                                        "
                                                      >
                                                        <td
                                                          style="
                                                            padding: 5px 10px 5px 0;
                                                            margin: 0;
                                                          "
                                                          width="80%"
                                                          align="left"
                                                        >
                                                          <p
                                                            style="
                                                              margin: 0;
                                                              -webkit-text-size-adjust: none;
                                                              -ms-text-size-adjust: none;
                                                              mso-line-height-rule: exactly;
                                                              font-family: `open
                                                                  sans`,
                                                                `helvetica neue`,
                                                                helvetica, arial,
                                                                sans-serif;
                                                              line-height: 24px;
                                                              color: #333333;
                                                              font-size: 16px;
                                                            "
                                                          >
                                                            Nom de client
                                                          </p>
                                                        </td>
                                                        <td
                                                          style="
                                                            padding: 5px 0;
                                                            margin: 0;
                                                          "
                                                          width="20%"
                                                          align="left"
                                                        >
                                                          <p
                                                            style="
                                                              margin: 0;
                                                              -webkit-text-size-adjust: none;
                                                              -ms-text-size-adjust: none;
                                                              mso-line-height-rule: exactly;
                                                              font-family: `open
                                                                  sans`,
                                                                `helvetica neue`,
                                                                helvetica, arial,
                                                                sans-serif;
                                                              line-height: 24px;
                                                              color: #333333;
                                                              font-size: 16px;
                                                            "
                                                          >
                                                            ' . $Name . '
                                                          </p>
                                                        </td>
                                                      </tr>
                                                  
                                                    </tbody>
                                                  </table>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <table
                    cellpadding="0"
                    cellspacing="0"
                    class="es-footer"
                    align="center"
                    style="
                      mso-table-lspace: 0pt;
                      mso-table-rspace: 0pt;
                      border-collapse: collapse;
                      border-spacing: 0px;
                      table-layout: fixed !important;
                      width: 100%;
                      background-color: transparent;
                      background-repeat: repeat;
                      background-position: center top;
                    "
                  >
                    <tbody>
                      <tr style="border-collapse: collapse">
                        <td align="center" style="padding: 0; margin: 0">
                          <table
                            class="es-footer-body"
                            cellspacing="0"
                            cellpadding="0"
                            align="center"
                            style="
                              mso-table-lspace: 0pt;
                              mso-table-rspace: 0pt;
                              border-collapse: collapse;
                              border-spacing: 0px;
                              background-color: #ffffff;
                              border-top: 1px solid transparent;
                              border-right: 1px solid transparent;
                              border-left: 1px solid transparent;
                              width: 800px;
                              border-bottom: 1px solid transparent;
                            "
                          >
                            <tbody>
                              <tr style="border-collapse: collapse">
                                <td
                                  align="left"
                                  style="
                                    margin: 0;
                                    padding-top: 35px;
                                    padding-left: 35px;
                                    padding-right: 35px;
                                    padding-bottom: 40px;
                                  "
                                >
                                  <table
                                    width="100%"
                                    cellspacing="0"
                                    cellpadding="0"
                                    style="
                                      mso-table-lspace: 0pt;
                                      mso-table-rspace: 0pt;
                                      border-collapse: collapse;
                                      border-spacing: 0px;
                                    "
                                  >
                                    <tbody>
                                      <tr style="border-collapse: collapse">
                                        <td
                                          valign="top"
                                          align="center"
                                          style="
                                            padding: 0;
                                            margin: 0;
                                            width: 728px;
                                          "
                                        >
                                          <table
                                            width="100%"
                                            cellspacing="0"
                                            cellpadding="0"
                                            role="presentation"
                                            style="
                                              mso-table-lspace: 0pt;
                                              mso-table-rspace: 0pt;
                                              border-collapse: collapse;
                                              border-spacing: 0px;
                                            "
                                          >
                                            <tbody>
                                              <tr style="border-collapse: collapse">
                                                <td
                                                  esdev-links-color="#777777"
                                                  align="center"
                                                  class="es-m-txt-c"
                                                  style="
                                                    padding: 0;
                                                    margin: 0;
                                                    padding-bottom: 5px;
                                                  "
                                                >
                                                  <p
                                                    style="
                                                      margin: 0;
                                                      -webkit-text-size-adjust: none;
                                                      -ms-text-size-adjust: none;
                                                      mso-line-height-rule: exactly;
                                                      font-family: `open sans`,
                                                        `helvetica neue`, helvetica,
                                                        arial, sans-serif;
                                                      line-height: 21px;
                                                      color: #777777;
                                                      font-size: 14px;
                                                    "
                                                  >
                                                  si vous remarquez que quelque chose ne va pas bien ou un manque d alignement, assurez-vous de nous contacter
                                                    <strong
                                                      ><u
                                                        ><a
                                                          target="_blank"
                                                          href="mailto:support@weblionz.com?subject=Cabinet%20GHARIBI%20Email%20Template%20problem"
                                                          style="
                                                            -webkit-text-size-adjust: none;
                                                            -ms-text-size-adjust: none;
                                                            mso-line-height-rule: exactly;
                                                            text-decoration: none;
                                                            color: #333333;
                                                            font-size: 14px;
                                                          "
                                                          >ICI</a
                                                        ></u
                                                      ></strong
                                                    >&nbsp;&nbsp;
                                                  </p>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <table
                    class="es-content"
                    cellspacing="0"
                    cellpadding="0"
                    align="center"
                    style="
                      mso-table-lspace: 0pt;
                      mso-table-rspace: 0pt;
                      border-collapse: collapse;
                      border-spacing: 0px;
                      table-layout: fixed !important;
                      width: 100%;
                    "
                  >
                    <tbody>
                      <tr style="border-collapse: collapse">
                        <td align="center" style="padding: 0; margin: 0">
                          <table
                            class="es-content-body"
                            style="
                              mso-table-lspace: 0pt;
                              mso-table-rspace: 0pt;
                              border-collapse: collapse;
                              border-spacing: 0px;
                              background-color: transparent;
                              width: 800px;
                            "
                            cellspacing="0"
                            cellpadding="0"
                            align="center"
                          >
                            <tbody>
                              <tr style="border-collapse: collapse">
                                <td
                                  align="left"
                                  style="
                                    margin: 0;
                                    padding-left: 20px;
                                    padding-right: 20px;
                                    padding-top: 30px;
                                    padding-bottom: 30px;
                                  "
                                >
                                  <table
                                    width="100%"
                                    cellspacing="0"
                                    cellpadding="0"
                                    style="
                                      mso-table-lspace: 0pt;
                                      mso-table-rspace: 0pt;
                                      border-collapse: collapse;
                                      border-spacing: 0px;
                                    "
                                  >
                                    <tbody>
                                      <tr style="border-collapse: collapse">
                                        <td
                                          valign="top"
                                          align="center"
                                          style="
                                            padding: 0;
                                            margin: 0;
                                            width: 760px;
                                          "
                                        >
                                          <table
                                            width="100%"
                                            cellspacing="0"
                                            cellpadding="0"
                                            role="presentation"
                                            style="
                                              mso-table-lspace: 0pt;
                                              mso-table-rspace: 0pt;
                                              border-collapse: collapse;
                                              border-spacing: 0px;
                                            "
                                          >
                                            <tbody>
                                              <tr style="border-collapse: collapse">
                                                <td
                                                  class="es-infoblock made_with"
                                                  align="center"
                                                  style="
                                                    padding: 0;
                                                    margin: 0;
                                                    line-height: 0px;
                                                    font-size: 0px;
                                                    color: #cccccc;
                                                  "
                                                >
                                                  <a
                                                    target="_blank"
                                                    href="https://fashionexpertise.agency"
                                                    style="
                                                      -webkit-text-size-adjust: none;
                                                      -ms-text-size-adjust: none;
                                                      mso-line-height-rule: exactly;
                                                      text-decoration: none;
                                                      color: #cccccc;
                                                      font-size: 12px;
                                                    "
                                                    ><img
                                                      src="https://gharibitraductions.com/images/logo.png"
                                                      alt=""
                                                      width="100"
                                                      style="
                                                        display: block;
                                                        border: 0;
                                                        outline: none;
                                                        text-decoration: none;
                                                        -ms-interpolation-mode: bicubic;
                                                      "
                                                  /></a>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </body>
    </html>
';
      $mail = new PHPMailer(true);
      try {
        //Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.ionos.fr';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'contact@gharibitraductions.com';
        $mail->Password   = 'contactgharibi123';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;
        //Recipients
        $mail->setFrom('contact@gharibitraductions.com', 'Cabinet Gharibi');
        $mail->addAddress('contact@gharibitraductions.com', 'Cabinet Gharibi');
        // Content
        $mail->isHTML(true);
        $mail->Subject = "Nouveau Message de $Name | Cabinet Gharibi Traductions | مكتب غريبي للترجمة $date";
        $mail->Body    = $html;
        $mail->send();
        $success = true;
        header('location:#contact-us?success=success');
      } catch (Exception $e) {
        header('location:#contact-us?error=error');
      }
    }
  }
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>
        Cabinet Gharibi Traductions | مكتب غريبي للترجمة Traduction assermentée de
        tous vos documents d'état civil, administratifs et juridiques en arabe et
        en français.
    </title>
    <meta name="description"
        content="Traducteur assermenté arabe français.Traduction de permis de conduire, extraits d'acte de naissance, extraits d'acte de mariage, jugements de divorce sur toute la France." />
    <meta name="keywords"
        content="Traduction , arabe, assermentÃ©e, Traduction , assermentÃ©e , arabe, officielle, officielle , arabe, arabe , Paris, arabe , Ile-de-France, arabe , Hauts-de-Seine, arabe , Mairie de Clichy, arabe , Clichy, arabe , Saint-Denis, arabe , BarbÃ¨s, arabe, arabe , Yvelines, arabe , Porte de Paris, arabe , Champs-ElysÃ©es, arabe , Boulogne-Billancourt, arabe , AsniÃ¨res, arabe , AsniÃ¨res-Gennevilliers, arabe , Colombes, arabe , Courbevoie, arabe , Levallois, arabe , franÃ§ais, franÃ§ais , arabe, arabe , 92, arabe , 93, arabe , 94, arabe , 75, assermentÃ©e , arabe , Paris, assermentÃ©e , arabe , Ile-de-France, assermentÃ©e , arabe , Hauts-de-Seine, assermentÃ©e , arabe , Mairie de Clichy, assermentÃ©e , arabe , Clichy, assermentÃ©e , arabe , Saint-Denis, assermentÃ©e , arabe , BarbÃ¨s, assermentÃ©e , arabe , Montreuil, assermentÃ©e , arabe , Yvelines, assermentÃ©e , arabe , Porte de Paris, assermentÃ©e , arabe , Porte d'OrlÃ©ans, assermentÃ©e , arabe , Champs-ElysÃ©es, assermentÃ©e , arabe , Boulogne-Billancourt, assermentÃ©e , arabe , AsniÃ¨res, assermentÃ©e , arabe , AsniÃ¨res-Gennevilliers, assermentÃ©e , arabe , Colombes, assermentÃ©e , arabe , Levallois, assermentÃ©e , arabe , franÃ§ais, assermentÃ©e , franÃ§ais , arabe, assermentÃ©e , arabe , 92, assermentÃ©e , arabe , 93, assermentÃ©e , arabe , 94, assermentÃ©e , arabe , 75, arabe , assermentÃ©e , Evry, arabe , assermentÃ©, arabe , officiel, assermentÃ©e , arabe , CourbevoieProcÃ©dures , exÃ©quatur , divorce , Maroc, filiation , Maroc, mariage , Maroc, divorce , Maroc, nationalitÃ© , Maroc, Kafala , Maroc, hÃ©ritage , Maroc, Ã©tat civil , Maroc" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title"
        content="Cabinet Gharibi Traductions | مكتب غريبي للترجمة  Traduction assermentée de tous vos documents d'état civil, administratifs et juridiques en arabe et en français." />
    <meta name="twitter:description"
        content="Traductions officielles arabe français par traducteur assermenté arabe. Traduction arabe urgente. Devis immédiat en ligne." />
    <meta name="twitter:image" content="images/image.jpg" />
    <meta property="og:title"
        content="Cabinet Gharibi Traductions | مكتب غريبي للترجمة  Traduction assermentée de tous vos documents d'état civil, administratifs et juridiques en arabe et en français." />
    <meta property="og:description"
        content="Traductions officielles arabe français par traducteur assermenté arabe. Traduction arabe urgente. Devis immédiat en ligne." />
    <meta property="og:image:width" content="1000" />
    <meta property="og:image:height" content="667" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="TRADUCTION ARABE" />
    <meta property="og:type" content="website" />
    <meta name="copyright" content="2022" />
    <meta name="author" content="Cabinet Gharibi Traductions" />
    <meta name="email" content="gharibi@rmeconsultants.com" />
    <meta name="Distribution" content="Global" />
    <meta name="Rating" content="General" />
    <meta name="Robots" content="index,follow" />
    <meta name="googlebot" content="index,follow" />
    <meta name="Revisit-after" content="1 Day" />
    <meta name="charset" content="utf-8" />
    <base href="" />
    <link rel="canonical" href="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="images/shortcut.png" type="image/png" />
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="stylesheet" href="styles/remixicon.css" />
    <link rel="stylesheet" href="styles/swiper-bundle.min.css" />
</head>

<body>
    <div class="loader">
        <div class="con-1">
            <div class="bc"></div>
            <div class="con">
                <img src="images/logo.png" alt="" />
            </div>
            <div>Please wait</div>
        </div>
    </div>
    <header>
        <div class="header-section">
            <div class="logo-section">
                <a href="#">
                    <img src="images/logo.png" alt="" />
                </a>
            </div>
            <ul class="navigation-page-section">
                <li>
                    <a href="">Acceuil</a>
                </li>
                <li>
                    <a href="#who-are-we">PRÉSENTATION</a>
                </li>
                <li>
                    <a href="#our-services">NOS SERVICES</a>
                </li>
                <li>
                    <a href="#documents-types">TYPES DE DOCUMENTS TRAITÉS</a>
                </li>

                <li id="contact-btn">
                    <a href="#contact-us">Nous contacter</a>
                </li>
            </ul>
        </div>
        <div class="header-top">
            <p>
                TRADUCTION ASSERMENTÉE FRANÇAIS<i class="ri-arrow-left-right-line"></i>
                ARABE
            </p>
        </div>
    </header>
    <div class="supported-countries">
        <div class="country">
            <img src="https://flagcdn.com/ma.svg" width="30" />
        </div>
        <div class="country">
            <img src="https://flagcdn.com/dz.svg" width="30" />
        </div>
        <div class="country">
            <img src="https://flagcdn.com/tn.svg" width="30" />
        </div>
        <div class="country">
            <img src="https://flagcdn.com/eg.svg" width="30" />
        </div>
        <div class="country">
            <img src="https://flagcdn.com/sa.svg" width="30" />
        </div>
        <div class="country">
            <img src="https://flagcdn.com/bh.svg" width="30" />
        </div>

        <div class="country">
            <img src="https://flagcdn.com/iq.svg" width="30" />
        </div>
        <div class="country">
            <img src="https://flagcdn.com/jo.svg" width="30" />
        </div>
        <div class="country">
            <img src="https://flagcdn.com/ly.svg" width="30" />
        </div>
        <div class="country">
            <img src="https://flagcdn.com/mr.svg" width="30" />
        </div>
        <div class="country">
            <img src="https://flagcdn.com/lb.svg" width="30" />
        </div>

        <div class="country">
            <img src="https://flagcdn.com/om.svg" width="30" />
        </div>
        <div class="country">
            <img src="https://flagcdn.com/km.svg" width="30" />
        </div>
        <div class="country">
            <img src="https://flagcdn.com/dj.svg" width="30" />
        </div>
        <div class="country">
            <img src="https://flagcdn.com/kw.svg" width="30" />
        </div>
        <div class="country">
            <img src="https://flagcdn.com/ps.svg" width="30" />
        </div>
        <div class="country">
            <img src="https://flagcdn.com/qa.svg" width="30" />
        </div>
        <div class="country">
            <img src="https://flagcdn.com/so.svg" width="30" />
        </div>
        <div class="country">
            <img src="https://flagcdn.com/sd.svg" width="30" />
        </div>
        <div class="country">
            <img src="https://flagcdn.com/sy.svg" width="30" />
        </div>
        <div class="country">
            <img src="https://flagcdn.com/ae.svg" width="30" />
        </div>
        <div class="country">
            <img src="https://flagcdn.com/ye.svg" width="30" />
        </div>
    </div>
    <div class="info-contact-section">
        <div class="phone-number">
            <a href="tel:0147313845">
                <i class="ri-phone-fill"></i> Tél. : 01.47.31.38.45
            </a>
        </div>
        <div class="email-address">
            <a href="mailto:gharibi@rmeconsultants.com">
                <i class="ri-mail-fill"></i> gharibi@rmeconsultants.com</a>
        </div>
        <div class="phone-number">
            <a href="https://www.google.com/maps/dir//Cabinet+Gharibi+Traductions+124+Bd+Jean+Jaur%C3%A8s+92110+Clichy+France/@48.906101,2.3014721,16z/data=!4m5!4m4!1m0!1m2!1m1!1s0x47e66f72ec2be489:0x1c6ed186e3991507"
                target="_">
                <i class="ri-map-pin-fill"></i> 124, boulevard Jean Jaurès 92110
                Clichy</a>
        </div>
    </div>
    <div class="site-wrap">
        <div class="site-content">
            <section id="acceuil">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="images/1.jpg"
                            alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/2.jpg" alt="">

                    </div>
                    <div class="swiper-slide">
                        <img src="images/3.jpg">
                    </div>
                </div>
            </section>
            <section id="who-are-we">
                <h1 class="title">Présentation</h1>
                <div class="first section types">
                    <div>
                        <h3>Qui somme nous?</h3>

                        <p>
                            Votre cabinet de traduction est implanté à Clichy depuis plus de
                            25 ans, notre formation universitaire en traduction juridique et
                            notre grande expérience dans le domaine de la traduction vous
                            garantissent le meilleur service.
                        </p>
                        <p>
                            Notre mission ne consiste pas seulement à procéder à une
                            traduction conforme et assermentée de vos documents mais nous
                            veillons également à vous renseigner au mieux pour vous orienter
                            en cas de besoin afin que vos démarches aboutissent.
                        </p>
                        <p>C’est cela qui fait la différence et notre réputation.</p>
                    </div>
                    <div style="
                background: url(images/image.jpg) no-repeat;
                background-position: center;
                background-size: cover;
              "></div>
                </div>
            </section>
            <section id="our-services">
                <h1 class="title">Nos services</h1>
                <div class="services">
                    <div class="service">
                        <div class="image-container">
                            <img src="images/5.jpg" />
                        </div>
                        <h3>
                            Traduction assermentée Arabe / Français de documents
                            administratifs, d’état civil, juridiques et judiciaires en arabe
                            et en français. <br />
                            ترجمة محلفة لجميع الوثائق والعقود القانونية والإدارية والقضائية
                            باللغتين العربية والفرنسية
                        </h3>
                    </div>
                    <div class="service">
                        <div class="image-container">
                            <img src="images/flags.jpg" alt="" />
                        </div>
                        <h3>
                            Votre cabinet de traduction traduit vos documents et vous
                            renseigne sur vos démarches administratives. <br />
                            نترجم وثائقكم ونوجهكم في إجراءاتكم الإدارية
                        </h3>
                    </div>
                </div>
            </section>
            <section id="documents-types">
                <h1 class="title">TYPES DE DOCUMENTS TRAITÉS</h1>
                <div class="types">
                    <div>
                        <h2><i class="ri-file-list-line"></i> LES DOCUMENTS</h2>
                        <ul style="line-height: 2">
                            <li>
                                Permis de conduire
                            </li>
                            <li>
                                Acte de naissance
                            </li>
                            <li>
                                Acte de mariage
                            </li>
                            <li>Acte de divorce </li>
                            <li>Jugement de divorce </li>
                            <li>Acte de décès</li>
                            <li>Diplôme</li>
                            <li>Relevé de notes</li>
                            <li>Certificat de scolarité</li>
                            <li>Attestation de réussite</li>
                            <li>Certificat de célibat, </li>
                            <li>Certificat de coutume, </li>
                            <li>Carte du service national,</li>
                            <li>Carte de dispense du service national, </li>
                            <li>Acte d'hérédité, acte de succession, acte de la fredha ...</li>
                            <li>Liste non exhaustive</li>
                        </ul>
                    </div>
                    <div>
                        <h2>الوثائق <i class="ri-file-list-line"></i></h2>
                        <ul style="line-height: 2; text-align: right;">
                            <li>رخصة السياقة</li>
                            <li>رسم الولادة</li>
                            <li>عقد الزواج</li>
                            <li>عقد الطلاق</li>
                            <li>حكم الطلاق</li>
                            <li>رسم الوفاة</li>
                            <li>شهادة الباكالوريا، ليسانس، إجازة، شهادة الماستر، الأستاذية</li>
                            <li>كشف النقاط</li>
                            <li>الشهادات المدرسية</li>
                            <li>شهادة النجاح</li>
                            <li>شهادة العزوبة</li>
                            <li>شهادة العرف</li>
                            <li>شهادة وبطاقة الخدمة الوطنية</li>
                            <li>شهادة وبطاقة الإعفاء من الخدمة الوطنية</li>
                            <li>...عقد الإراثة و الفريضة</li>
                            <li>لائحة غير شاملة </li>
                        </ul>
                    </div>
                </div>
            </section>
            <section id="contact-us">
                <h1 class="title">NOUS CONTACTER</h1>
                <p>
                    Vous pouvez déposer vos documents directement au cabinet sis au 124
                    boulevard Jean Jaurès 92110 Clichy, nous les envoyer par mail en cas
                    d’empêchement, payer à distance et venir les récupérer, ou également
                    envoyer un message par le biais du formulaire de contact.
                </p>

                <form action="" method="post" style="margin-top: 1em">
                    <div class="container">
                        <div class="input">
                            <input required type="text" name="Name" placeholder="Nom complet" />
                        </div>
                        <div class="input">
                            <input required type="text" name="Email" placeholder="Votre Email" />
                        </div>
                    </div>
                    <textarea name="Message" id="" cols="30" rows="10" placeholder="Votre message" required></textarea>
                    <button>Envoyez maintenant</button>

                </form>
                <div class="map-time">
                    <div class="iframe">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2622.489393551267!2d2.2993129153657055!3d48.90606750530305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66f72ec2be489%3A0x1c6ed186e3991507!2sCabinet%20Gharibi%20Traductions!5e0!3m2!1sen!2sma!4v1646870113107!5m2!1sen!2sma"
                            width="100%" height="500" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
                        <div class="directions">
                            <div class="metro sc">
                                <div class="icon mt">
                                    <div class="one">M</div>
                                    <div class="two">13</div>
                                </div>
                                <span>Metro Ligne 13 Mairie de Clichy</span>
                            </div>
                            <div class="bus sc">
                                <div class="icon">
                                    <i class="ri-bus-fill"></i>
                                </div>
                                <span>Bus 54 - 174 - 340 <br />
                                    Arrêt : Léon Blum</span>
                            </div>
                            <div class="bus sc">
                                <div class="icon">
                                    <i class="ri-bus-fill"></i>
                                </div>
                                <span>Bus TUC <br />
                                    Arrêt : Gabriel Peri</span>
                            </div>
                        </div>
                    </div>
                    <div class="time">
                        <h2><i class="ri-time-line"></i> Horaires d’ouverture :</h2>
                        <div class="contenaire">
                            <div class="date-day">
                                <div class="day">
                                    Lundi
                                </div>
                                <div class="hour-time">
                                    09:00-13:00, 14:00-19:00
                                </div>
                            </div>
                            <div class="date-day">
                                <div class="day">
                                    Mardi
                                </div>
                                <div class="hour-time">
                                    09:00-13:00, 14:00-19:00
                                </div>
                            </div>
                            <div class="date-day">
                                <div class="day">
                                    Mercredi
                                </div>
                                <div class="hour-time">
                                    09:00-13:00, 14:00-19:00
                                </div>
                            </div>
                            <div class="date-day">
                                <div class="day">
                                    Jeudi
                                </div>
                                <div class="hour-time">
                                    09:00-13:00, 14:00-19:00
                                </div>
                            </div>
                            <div class="date-day">
                                <div class="day">
                                    Vendredi
                                </div>
                                <div class="hour-time">
                                    09:00-13:00, 14:00-19:00
                                </div>
                            </div>
                            <div class="date-day">
                                <div class="day">
                                    Samedi
                                </div>
                                <div class="hour-time">
                                    14:00-13:00
                                </div>
                            </div>
                            <div class="date-day">
                                <div class="day">
                                    Dimanche
                                </div>
                                <div class="hour-time">
                                    Fermé
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <?php
          if ($_GET["success"]=="success") {
                 echo '<div class="popup">
                 Merci pour votre Message.
                 </div>';
          }
          else if ($_GET["error"]=="error") {
                  echo '<div class="popup error">
                  quelque chose s`est mal passé
                  </div>';
          }
                      
    ?>
    <footer>
        © Cabinet Gharibi Traductions 2022. Tous droits réservés - Site réalisé
        par <a target="_blank" href="https://weblionz.com">weblionz</a>
    </footer>

</body>
<script src="scripts/swiper-bundle.min.js"></script>
<script src="scripts/ui.min.js"></script>

</html>