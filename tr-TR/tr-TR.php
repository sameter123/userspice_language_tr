<?php
/*
TO CREATE A NEW LANGUAGE, COPY THE en-us.php to your own localization code name.
We are going to keep these files in the iso xx-xx format because that will also
allow us to autoformat numbers on the sites.

PLEASE put your name somewhere at the top of the language file so we can get in touch with
you to update it and thank you for your hard work!

PLEASE NOTE: DO NOT ADD RANDOM KEYS in the middle of the translations.  In order to make it easier to tell what language keys are missing, from this point forward, we are going to add all new language keys at the BOTTOM of this file. The number of lines in your language file will tell you which keys still need to be translated.  If you have questions please ask on the forums or on Discord.

UserSpice 4
An Open Source PHP User Management System
by the UserSpice Team at http://UserSpice.com

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

/*
%m1% - Dymamic markers which are replaced at run time by the relevant index.
*/

$lang = array();
//important strings
//You defiitely want to customize these for your language
$lang = array_merge($lang,array(
"THIS_LANGUAGE"	=>"Türkçe",
"THIS_CODE"			=>"tr-TR",
"MISSING_TEXT"	=>"Çevrilmemiş metin",
));

//Database Menus
$lang = array_merge($lang,array(
"MENU_HOME"			=> "Anasayfa",
"MENU_HELP"			=> "Yardım",
"MENU_ACCOUNT"	=> "Hesap",
"MENU_DASH"			=> "Admin Paneli",
"MENU_USER_MGR"	=> "Kullanıcı Yönetimi",
"MENU_PAGE_MGR"	=> "Sayfa Yönetimi",
"MENU_PERM_MGR"	=> "İzin Yönetimi",
"MENU_MSGS_MGR"	=> "Mesaj Yönetimi",
"MENU_LOGS_MGR"	=> "Sistem Girişleri",
"MENU_LOGOUT"		=> "Çıkış Yap",
));

// Signup
$lang = array_merge($lang,array(
	"SIGNUP_TEXT"					=> "Kayıt",
	"SIGNUP_BUTTONTEXT"		=> "Kaydol",
	"SIGNUP_AUDITTEXT"		=> "Kayıt",
	));

// Signin
$lang = array_merge($lang,array(
	"SIGNIN_FAIL"				=> "** GİRİŞ HATASI **",
	"SIGNIN_PLEASE_CHK" => "Kullanıcı adınızı ve/veya şifrenizi tekrar kontrol edin!",
	"SIGNIN_UORE"				=> "Kullanıcı Adı yada E-posta",
	"SIGNIN_PASS"				=> "Şifre",
	"SIGNIN_TITLE"			=> "Lütfen Giriş Yap",
	"SIGNIN_TEXT"				=> "Giriş Yap",
	"SIGNOUT_TEXT"			=> "Çıkış Yap",
	"SIGNIN_BUTTONTEXT"	=> "Giriş",
	"SIGNIN_REMEMBER"		=> "Beni Hatırla",
	"SIGNIN_AUDITTEXT"	=> "Giriş Yapıldı",
	"SIGNIN_FORGOTPASS"	=>"Şifremi Unuttum",
	"SIGNOUT_AUDITTEXT"	=> "Çıkış Yapıldı",
	));

// Account Page
$lang = array_merge($lang,array(
	"ACCT_EDIT"					=> "Hesap Bilgilerini Düzenle",
	"ACCT_2FA"					=> "2 Faktörlü Doğrulamayı Yönet",
	"ACCT_SESS"					=> "Oturumları Yönet",
	"ACCT_HOME"					=> "Hesap Anasayfası",
	"ACCT_SINCE"				=> "Kayıt Tarihi : ",
	"ACCT_LOGINS"				=> "Giriş Sayısı : ",
	"ACCT_SESSIONS"			=> "Aktif Oturumların Sayısı : ",
	"ACCT_MNG_SES"			=> "Daha fazla bilgi için sol kenar çubuğundaki Oturumları Yönet düğmesini tıklayın.",
	));

	//General Terms
	$lang = array_merge($lang,array(
		"GEN_ENABLED"			=> "Aktifleştir",
		"GEN_DISABLED"		=> "Deaktifleştir",
		"GEN_ENABLE"			=> "Aktif",
		"GEN_DISABLE"			=> "Deaktif",
		"GEN_NO"					=> "Hayır",
		"GEN_YES"					=> "Evet",
		"GEN_MIN"					=> "min",
		"GEN_MAX"					=> "maks",
		"GEN_CHAR"				=> "kar.", //as in characters
		"GEN_SUBMIT"			=> "Onayla",
		"GEN_MANAGE"			=> "Yönet",
		"GEN_VERIFY"			=> "Onayla",
		"GEN_SESSION"			=> "Oturum",
		"GEN_SESSIONS"		=> "Oturum",
		"GEN_EMAIL"				=> "E-posta",
		"GEN_FNAME"				=> "Ad",
		"GEN_LNAME"				=> "Soy ad",
		"GEN_UNAME"				=> "Kullanıcı Adı",
		"GEN_PASS"				=> "Şifre",
		"GEN_MSG"					=> "Mesaj",
		"GEN_TODAY"				=> "Bugün",
		"GEN_CLOSE"				=> "Kapat",
		"GEN_CANCEL"			=> "İptal",
		"GEN_CHECK"				=> "[ Hepsini Seç/Seçimi kaldır ]",
		"GEN_WITH"				=> "ile",
		"GEN_UPDATED"			=> "Güncellendi",
		"GEN_UPDATE"			=> "Güncelle",
		"GEN_BY"					=> "tarafından",
		"GEN_ENABLE"			=> "Aktif",
		"GEN_DISABLE"			=> "Deaktif",
		"GEN_FUNCTIONS"		=> "Fonksiyonlar",
		"GEN_NUMBER"			=> "numara",
		"GEN_NUMBERS"			=> "numara",
		"GEN_INFO"				=> "Bilgi",
		"GEN_REC"					=> "Kaydedildi",
		"GEN_DEL"					=> "Sil",
		"GEN_NOT_AVAIL"		=> "Mümkün değil",
		"GEN_AVAIL"				=> "Mümkün",
		"GEN_BACK"				=> "Geri",
		"GEN_RESET"				=> "Sıfırla",
		"GEN_REQ"					=> "gerekli",
		"GEN_AND"					=> "ve",
		"GEN_SAME"				=> "aynı olmalı",
		));

//validation class
	$lang = array_merge($lang,array(
		"VAL_SAME"				=> "aynı olmalı",
		"VAL_EXISTS"			=> "zaten kullanımda, lütfen başka bir tane seçin",
		"VAL_DB"					=> "Veritabanı hatası",
		"VAL_NUM"					=> "numara olmalı",
		"VAL_INT"					=> "tam sayı olmalı",
		"VAL_EMAIL"				=> "geçerli bir e-posta olmalı",
		"VAL_NO_EMAIL"		=> "e-posta adresi olamaz",
		"VAL_SERVER"			=> "geçerli bir sunucuya ait olmalı",
		"VAL_LESS"				=> "daha az olmalı",
		"VAL_GREAT"				=> "daha büyük olmalı",
		"VAL_LESS_EQ"			=> "eşit veya daha küçük olmalıdır",
		"VAL_GREAT_EQ"		=> "eşit veya daha büyük olmalıdır",
		"VAL_NOT_EQ"			=> "eşit olmamalı",
		"VAL_EQ"					=> "eşit olmalı",
		"VAL_TZ"					=> "geçerli bir saat dilimi adı olmalı",
		"VAL_MUST"				=> "olmalıdır",
		"VAL_MUST_LIST"		=> "aşağıdakilerden biri olmalı",
		"VAL_TIME"				=> "geçerli bir zaman olmalı",
		"VAL_SEL"					=> "geçerli bir seçim değil",
		"VAL_NA_PHONE"		=> "geçerli bir Kuzey Amerika telefon numarası olmalıdır",
	));

		//Time
	$lang = array_merge($lang,array(
		"T_YEARS"			=> "Yıl",
		"T_YEAR"			=> "Yıl",
		"T_MONTHS"		=> "Ay",
		"T_MONTH"			=> "Ay",
		"T_WEEKS"			=> "Hafta",
		"T_WEEK"			=> "Hafta",
		"T_DAYS"			=> "Gün",
		"T_DAY"				=> "Gün",
		"T_HOURS"			=> "Saat",
		"T_HOUR"			=> "Saat",
		"T_MINUTES"		=> "Dakika",
		"T_MINUTE"		=> "Dakika",
		"T_SECONDS"		=> "Saniye",
		"T_SECOND"		=> "Saniye",
		));


		//Passwords
	$lang = array_merge($lang,array(
		"PW_NEW"		=> "Yeni Şifre",
		"PW_OLD"		=> "Eski Şifre",
		"PW_CONF"		=> "Şifre Onayı",
		"PW_RESET"	=> "Şifreyi sıfırla",
		"PW_UPD"		=> "Şifre Güncellendi",
		"PW_SHOULD"	=> "Şifre şöyle olmalı...",
		"PW_SHOW"		=> "Şifreyi Göster",
		"PW_SHOWS"	=> "Şifreleri Göster",
		));


		//Join
	$lang = array_merge($lang,array(
		"JOIN_SUC"			=> "Hoşgeldiniz! ",
		"JOIN_THANKS"		=> "Kayıt olduğunuz için teşekkürler",
		"JOIN_HAVE"			=> "En azından ",
		"JOIN_CAP"			=> " büyük harf",
		"JOIN_TWICE"		=> "İki kez doğru yazılmalıdır",
		"JOIN_CLOSED"		=> "Maalesef kayıt şu anda devre dışı. Herhangi bir sorunuz veya endişeniz varsa, lütfen Site Yöneticisine başvurun.",
		"JOIN_TC"				=> "Kullanıcı Şartları ve Koşulları",
		"JOIN_ACCEPTTC" => "Kullanıcı Şart ve Koşullarını Kabul Ediyorum",
		"JOIN_CHANGED"	=> "Şartlarımız değişti",
		"JOIN_ACCEPT" 	=> "Kullanıcı Şart ve Koşullarını Kabul Et ve Devam Et",
		));

		//Sessions
	$lang = array_merge($lang,array(
		"SESS_SUC"	=> "Başarıyla sonlandırıldı ",
		));

		//Messages
	$lang = array_merge($lang,array(
		"MSG_SENT"			=> "Your message has been sent!",
		"MSG_MASS"			=> "Your mass message has been sent!",
		"MSG_NEW"				=> "New Message",
		"MSG_NEW_MASS"	=> "New Mass Message",
		"MSG_CONV"			=> "Conversations",
		"MSG_NO_CONV"		=> "No Conversations",
		"MSG_NO_ARC"		=> "No Conversations",
		"MSG_QUEST"			=> "Send Email Notification if Enabled?",
		"MSG_ARC"				=> "Archived Threads",
		"MSG_VIEW_ARC"	=> "View Archived Threads",
		"MSG_SETTINGS"  => "Message Settings",
		"MSG_READ"			=> "Read",
		"MSG_BODY"			=> "Body",
		"MSG_SUB"				=> "Subject",
		"MSG_DEL"				=> "Delivered",
		"MSG_REPLY"			=> "Reply",
		"MSG_QUICK"			=> "Quick Reply",
		"MSG_SELECT"		=> "Select a user",
		"MSG_UNKN"			=> "Unknown Recipient",
		"MSG_NOTIF"			=> "Message Email Notifications",
		"MSG_BLANK"			=> "Message cannot be blank",
		"MSG_MODAL"			=> "Click here or press Alt + R to focus on this box OR press Shift + R to open the expanded reply pane!",
		"MSG_ARCHIVE_SUCCESSFUL"        => "You have successfully archived %m1% threads",
		"MSG_UNARCHIVE_SUCCESSFUL"      => "You have successfully unarchived %m1% threads",
		"MSG_DELETE_SUCCESSFUL"         => "You have successfully deleted %m1% threads",
		"USER_MESSAGE_EXEMPT"         			=> "User is %m1% exempted from messages.",
		"MSG_MK_READ"		=> "Read",
		"MSG_MK_UNREAD"	=> "Unread",
		"MSG_ARC_THR"		=> "Archive Selected Threads",
		"MSG_UN_THR"		=> "Unarchive Selected Threads",
		"MSG_DEL_THR"		=> "Delete Selected Threads",
		"MSG_SEND"			=> "Send Message",
		));

	//2 Factor Authentication
	$lang = array_merge($lang,array(
		"2FA"				=> "2 Factor Authentication",
		"2FA_CONF"	=> "Are you sure you want to disable 2FA? Your account will no longer be protected.",
		"2FA_SCAN"	=> "Scan this QR code with your authenticator app or input the key",
		"2FA_THEN"	=> "Then enter one of your one-time passkeys here",
		"2FA_FAIL"	=> "There was a problem verifying 2FA. Please check Internet or contact support.",
		"2FA_CODE"	=> "2FA Code",
		"2FA_EXP"		=> "Expired 1 fingerprint",
		"2FA_EXPD"	=> "Expired",
		"2FA_EXPS"	=> "Expires",
		"2FA_ACTIVE"=> "Active Sessions",
		"2FA_NOT_FN"=> "No fingerprints found",
		"2FA_FP"		=> "Fingerprints",
		"2FA_NP"		=> "<strong>Login Failed</strong> Two Factor Auth Code was not present. Please try again.",
		"2FA_INV"		=> "<strong>Login Failed</strong> Two Factor Auth Code was invalid. Please try again.",
		"2FA_FATAL"	=> "<strong>Fatal Error</strong> Please contact System Admin.",
		));

	//Redirect Messages - These get a plus between each word
	$lang = array_merge($lang,array(
		"REDIR_2FA"						=> "Sorry.Two+factor+is+not+enabled+at+this+time",
		"REDIR_2FA_EN"				=> "2+Factor+Authentication+Enabled",
		"REDIR_2FA_DIS"				=> "2+Factor+Authentication+Disabled",
		"REDIR_2FA_VER"				=> "2+Factor+Authentication+Verified+and+Enabled",
		"REDIR_SOM_TING_WONG" => "Something+went+wrong.+Please+try+again.",
		"REDIR_MSG_NOEX"			=> "That+thread+does+not+belong+to+you+or+does+not+exist.",
		"REDIR_UN_ONCE"				=> "Username+has+already+been+changed+once.",
		"REDIR_EM_SUCC"				=> "Email+Updated+Successfully",
		));

	//Emails
	$lang = array_merge($lang,array(
		"EML_CONF"			=> "Confirm Email",
		"EML_VER"				=> "Verify Your Email",
		"EML_CHK"				=> "Email request received. Please check your email to perform verification. Be sure to check your Spam and Junk folder as the verification link expires in ",
		"EML_MAT"				=> "Your email did not match.",
		"EML_HELLO"			=> "Hello from ",
		"EML_HI"				=> "Hi ",
		"EML_AD_HAS"		=> "An Administrator has reset your password.",
		"EML_AC_HAS"		=> "An Administrator has created your account.",
		"EML_REQ"				=> "You will be required to set your password using the link above.",
		"EML_EXP"				=> "Please note, Password links expire in ",
		"EML_VER_EXP"		=> "Please note, Verification links expire in ",
		"EML_CLICK"			=> "Click here to login.",
		"EML_REC"				=> "It is recommended to change your password upon logging in.",
		"EML_MSG"				=> "You have a new message from",
		"EML_REPLY"			=> "Click here to reply or view the thread",
		"EML_WHY"				=> "You are receiving this email because a request was made to reset your password. If this was not you, you may disregard this email.",
		"EML_HOW"				=> "If this was you, click the link below to continue with the password reset process.",
		"EML_EML"				=> "A request to change your email was made from within your user account.",
		"EML_VER_EML"		=> "Thanks for signing up.  Once you verify your email address you will be ready to login! Please click the link below to verify your email address.",

		));

		//Verification
		$lang = array_merge($lang,array(
			"VER_SUC"			=> "Your Email has been verified!",
			"VER_FAIL"		=> "We were unable to verify your account. Please try again.",
			"VER_RESEND"	=> "Resend Verification Email",
			"VER_AGAIN"		=> "Enter your email address and try again",
			"VER_PAGE"		=> "<li>Check your email and click the link that is sent to you</li><li>Done</li>",
			"VER_RES_SUC" => "<p>Your verification link has been sent to your email address.</p><p>Click the link in the email to complete verification. Be sure to check your spam folder if the email isn't in your inbox.</p><p>Verification links are only valid for ",
			"VER_OOPS"		=> "Oops...something went wrong, maybe an old reset link you clicked on. Click below to try again",
			"VER_RESET"		=> "Your password has been reset!",
			"VER_INS"			=> "<li>Enter your email address and click Reset</li> <li>Check your email and click the link that is sent to you.</li>
												<li>Follow the on screen instructions</li>",
			"VER_SENT"		=> "<p>Your password reset link has been sent to your email address.</p>
			    							<p>Click the link in the email to Reset your password. Be sure to check your spam folder if the email isn't in your inbox.</p><p>Reset links are only valid for ",
			"VER_PLEASE"	=> "Please reset your password",
			));

	//User Settings
	$lang = array_merge($lang,array(
		"SET_PIN"				=> "Reset PIN",
		"SET_WHY"				=> "Why can't I change this?",
		"SET_PW_MATCH"	=> "Must match the New Password",

		"SET_PIN_NEXT"	=> "You can set a new PIN the next time you require verification",
		"SET_UPDATE"		=> "Update your user settings",
		"SET_NOCHANGE"	=> "The Administrator has disabled changing usernames.",
		"SET_ONECHANGE"	=> "The Administrator set username changes to occur only once and you have done so already.",

		"SET_GRAVITAR"	=> "<strong>Want to change your profile picture? </strong><br> Visit <a href='https://en.gravatar.com/'>https://en.gravatar.com/</a> and setup an account with the same email you used on this site.It works across millions of sites. It's fast and easy!",

		"SET_NOTE1"			=> "<p><strong>Please note</strong> there is a pending request to update your email to",

		"SET_NOTE2"			=> ".</p><p>Please use the verification email to complete this request.</p>
		<p>If you need a new verification email, please re-enter the email above and submit the request again.</p>",

		"SET_PW_REQ" 		=> "required for changing password, email, or resetting PIN",
		"SET_PW_REQI" 	=> "Required to change your password",

		));

	//Errors
	$lang = array_merge($lang,array(
		"ERR_FAIL_ACT"		=> "Failed to kill active sessions, Error: ",
		"ERR_EMAIL"				=> "Email NOT sent due to error. Please contact site administrator.",
		"ERR_EM_DB"				=> "That email does not exist in our database",
		"ERR_TC"					=> "Please read and accept terms and conditions",
		"ERR_CAP"					=> "You failed the Captcha Test, Robot!",
		"ERR_PW_SAME"			=> "Your old password cannot be the same as your new",
		"ERR_PW_FAIL"			=> "Current password verification failed. Update failed. Please try again.",
		"ERR_GOOG"				=> "<strong>NOTE:</strong> If you originally signed up with your Google/Facebook account, you will need to use the forgot password link to change your password...unless you're really good at guessing.",
		"ERR_EM_VER"			=> "Email verification is not enabled. Please contact the System Administrator.",
		"ERR_EMAIL_STR"		=> "Something is strange. Please re-verify your email. We are sorry for the inconvenience",

		));

	//Maintenance Page
	$lang = array_merge($lang,array(
		"MAINT_HEAD"		=> "We will be back soon!",
		"MAINT_MSG"			=> "Sorry for the inconvenience but we are performing some maintenance at the moment.<br> We will be back online shortly!",
		"MAINT_BAN"			=> "Sorry. You have been banned. If you feel this is an error, please contact the administrator.",
		"MAINT_TOK"			=> "There was an error with your form. Please go back and try again. Please note that submitting the form by refreshing the page will cause an error. If this continues to happen, please contact the administrator.",
		"MAINT_OPEN"		=> "An Open Source PHP User Management Framework.",
		"MAINT_PLEASE"	=> "You have successfully installed UserSpice!<br>To view our getting started documentation, please visit"
		));

		//dataTables Added in 4.4.08
		//NOTE: do not change the words like _START_ between the two _ symbols!
		$lang = array_merge($lang,array(
		"DAT_SEARCH"    => "Search",
		"DAT_FIRST"     => "First",
		"DAT_LAST"      => "Last",
		"DAT_NEXT"      => "Next",
		"DAT_PREV"      => "Previous",
		"DAT_NODATA"        => "No data available in table",
		"DAT_INFO"          => "Showing _START_ to _END_ of _TOTAL_ entries",
		"DAT_ZERO"          => "Showing 0 to 0 of 0 entries",
		"DAT_FILTERED"      => "(filtered from _MAX_ total entries)",
		"DAT_MENU_LENG"     => "Show _MENU_ entries",
		"DAT_LOADING"       => "Loading...",
		"DAT_PROCESS"       => "Processing...",
		"DAT_NO_REC"        => "No matching records found",
		"DAT_ASC"           => "Activate to sort column ascending",
		"DAT_DESC"          => "Activate to sort column descending",
		));

		

//LEAVE THIS LINE AT THE BOTTOM.  It allows users/lang to override these keys
if(file_exists($abs_us_root.$us_url_root."usersc/lang/".$lang["THIS_CODE"].".php")){
	include($abs_us_root.$us_url_root."usersc/lang/".$lang["THIS_CODE"].".php");
}
?>
