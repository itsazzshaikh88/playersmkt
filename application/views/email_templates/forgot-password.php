<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Email Confirmation</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		@media screen {
			@font-face {
				font-family: 'Source Sans Pro';
				font-style: normal;
				font-weight: 400;
				src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url(https://fonts.gstatic.com/s/sourcesanspro/v10/ODelI1aHBYDBqgeIAH2zlBM0YzuT7MdOe03otPbuUS0.woff) format('woff');
			}

			@font-face {
				font-family: 'Source Sans Pro';
				font-style: normal;
				font-weight: 700;
				src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url(https://fonts.gstatic.com/s/sourcesanspro/v10/toadOcfmlt9b38dHJxOBGFkQc6VGVFSmCnC_l7QZG60.woff) format('woff');
			}
		}

		body,
		table,
		td,
		a {
			-ms-text-size-adjust: 100%;
			/* 1 */
			-webkit-text-size-adjust: 100%;
			/* 2 */
		}

		/**
   * Remove extra space added to tables and cells in Outlook.
   */
		table,
		td {
			mso-table-rspace: 0pt;
			mso-table-lspace: 0pt;
		}

		/**
   * Better fluid images in Internet Explorer.
   */
		img {
			-ms-interpolation-mode: bicubic;
		}

		/**
   * Remove blue links for iOS devices.
   */
		a[x-apple-data-detectors] {
			font-family: inherit !important;
			font-size: inherit !important;
			font-weight: inherit !important;
			line-height: inherit !important;
			color: inherit !important;
			text-decoration: none !important;
		}

		/**
   * Fix centering issues in Android 4.4.
   */
		div[style*="margin: 16px 0;"] {
			margin: 0 !important;
		}

		body {
			width: 100% !important;
			height: 100% !important;
			padding: 0 !important;
			margin: 0 !important;
		}

		/**
   * Collapse table borders to avoid space between cells.
   */
		table {
			border-collapse: collapse !important;
		}

		a {
			color: #01d099;
		}

		img {
			height: auto;
			line-height: 100%;
			text-decoration: none;
			border: 0;
			outline: none;
		}
	</style>

</head>

<body style="background-color: #e9ecef;">

	<!-- start preheader -->
	<div class="preheader" style="display: none; max-width: 0; max-height: 0; overflow: hidden; font-size: 1px; line-height: 1px; color: #fff; opacity: 0;">
		Welcome to <?= APP_NAME ?>. Verify Your Account.
	</div>
	<!-- end preheader -->

	<!-- start body -->
	<table border="0" cellpadding="0" cellspacing="0" width="100%">

		<!-- start logo -->
		<tr>
			<td align="center" bgcolor="#e9ecef">
				<!--[if (gte mso 9)|(IE)]>
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
        <tr>
        <td align="center" valign="top" width="600">
        <![endif]-->
				<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
					<tr>
						<td align="center" valign="top" style="padding: 36px 24px;">
							<a href="<?= base_url() ?>" target="_blank" style="display: inline-block;">
								<img src="<?= APP_LOGO ?>" alt="Logo" border="0" width="100" style="display: block; width: 100px; max-width: 100px; min-width: 100px;">
							</a>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<!-- end logo -->

		<!-- start hero -->
		<tr>
			<td align="center" bgcolor="#e9ecef">
				<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
					<tr>
						<td align="left" bgcolor="#ffffff" style="padding: 36px 24px 0; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; border-top: 3px solid #01d09960;">
							<h1 style="margin: 0; font-size: 32px; font-weight: 700; letter-spacing: -1px; line-height: 48px;">Password Reset Instructions</h1>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<!-- end hero -->

		<!-- start copy block -->
		<tr>
			<td align="center" bgcolor="#e9ecef">
				<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">

					<!-- start copy -->
					<tr>
						<td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
							<p style="margin: 0;">Hi, <?= $username ?></p>
							<p style="margin: 0; margin-top:10px;">
								We received a request to reset your password. To proceed with the password reset, click the link below:</p>
							<p style="margin: 0; margin-top:10px; font-weight:bold;">
								Reset Your Password:
							</p>
						</td>
					</tr>
					<!-- end copy -->

					<!-- start button -->
					<tr>
						<td align="left" bgcolor="#ffffff">
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td align="center" bgcolor="#ffffff" style="padding: 12px;">
										<table border="0" cellpadding="0" cellspacing="0">
											<tr>
												<td align="center" bgcolor="#01d099" style="border-radius: 6px;">
													<a href="<?= $password_link ?>" target="_blank" style="display: inline-block; padding: 16px 36px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; color: #ffffff; text-decoration: none; border-radius: 6px;">Update Account Password</a>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<!-- end button -->

					<!-- start copy -->
					<tr>
						<td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
							<p style="margin: 0;">If you didn't request a password reset, you can ignore this email.</p>
						</td>
					</tr>
					<!-- end copy -->

					<!-- start copy -->
					<tr>
						<td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px; border-bottom: 3px solid #d4dadf">
							<p style="margin: 0;">Cheers,<br> Team <?= APP_NAME ?></p>
						</td>
					</tr>
					<!-- end copy -->

				</table>
				<!--[if (gte mso 9)|(IE)]>
        </td>
        </tr>
        </table>
        <![endif]-->
			</td>
		</tr>
		<!-- end copy block -->

		<!-- start footer -->
		<tr>
			<td align="center" bgcolor="#e9ecef" style="padding: 24px;">
				<!--[if (gte mso 9)|(IE)]>
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
        <tr>
        <td align="center" valign="top" width="600">
        <![endif]-->
				<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">

					<!-- start permission -->
					<tr>
						<td align="center" bgcolor="#e9ecef" style="padding: 12px 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; color: #666;">
							<p style="margin: 0;">You received this email because you have registred with us If you didn't request account verification you can safely delete this email.</p>
						</td>
					</tr>
					<!-- end permission -->

				</table>
			</td>
		</tr>
		<!-- end footer -->

	</table>
	<!-- end body -->

</body>

</html>
