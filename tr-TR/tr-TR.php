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
		"MSG_SENT"			=> "Mesajınız gönderildi!",
		"MSG_MASS"			=> "Toplu mesajınız gönderildi!",
		"MSG_NEW"				=> "Yeni Mesaj",
		"MSG_NEW_MASS"	=> "Yeni Toplu Mesaj",
		"MSG_CONV"			=> "Konuşmalar",
		"MSG_NO_CONV"		=> "Konuşma Yok",
		"MSG_NO_ARC"		=> "Konuşma Yok",
		"MSG_QUEST"			=> "Eğer e-posta bildirimi aktifse gönder?",
		"MSG_ARC"				=> "Arşivlenmiş Konular",
		"MSG_VIEW_ARC"	=> "Arşivlenen Konuları Göster",
		"MSG_SETTINGS"  => "Mesaj ayarları",
		"MSG_READ"			=> "Oku",
		"MSG_BODY"			=> "Gövde",
		"MSG_SUB"				=> "Konu",
		"MSG_DEL"				=> "İletildi",
		"MSG_REPLY"			=> "Cevapla",
		"MSG_QUICK"			=> "Hızlı Cevapla",
		"MSG_SELECT"		=> "Kullanıcı Seç",
		"MSG_UNKN"			=> "Bilinmeyen Alıcı",
		"MSG_NOTIF"			=> "Mesaj E-posta Bildirimleri",
		"MSG_BLANK"			=> "Mesaj boş bırakılamaz",
		"MSG_MODAL"			=> "Bu kutuya odaklanmak için burayı tıklayın veya Alt + R tuşlarına basın VEYA genişletilmiş yanıt bölmesini açmak için Shift + R tuşlarına basın!",
		"MSG_ARCHIVE_SUCCESSFUL"        => "Başarıyla %m1% konuyu arşivlediniz",
		"MSG_UNARCHIVE_SUCCESSFUL"      => "Başarıyla %m1% konuyu arşivden çıkarttınız",
		"MSG_DELETE_SUCCESSFUL"         => "Başarıyla %m1% konuyu sildiniz",
		"USER_MESSAGE_EXEMPT"         			=> "Kullanıcı %m1% mesajlarından muaf tutuldu",
		"MSG_MK_READ"		=> "Okundu",
		"MSG_MK_UNREAD"	=> "Okunmadı",
		"MSG_ARC_THR"		=> "Seçili Konuları Arşivle",
		"MSG_UN_THR"		=> "Seçili Konuları Arşivden Çıkart",
		"MSG_DEL_THR"		=> "Seçilen Konuları Sil",
		"MSG_SEND"			=> "Mesajı Gönder",
		));

	//2 Factor Authentication
	$lang = array_merge($lang,array(
		"2FA"				=> "2 Faktör Kimlik Doğrulaması",
		"2FA_CONF"	=> "2FA'yı devre dışı bırakmak istediğinize emin misiniz? Hesabınız artık korunmayacak.",
		"2FA_SCAN"	=> "Bu QR kodunu kimlik doğrulama uygulamanızla tarayın veya anahtarı girin",
		"2FA_THEN"	=> "Sonra bir kereye mahsus şifrelerinizden birini buraya girin",
		"2FA_FAIL"	=> "2FA doğrulanırken bir sorun oluştu. Lütfen İnternet'i kontrol edin veya destek birimine başvurun.",
		"2FA_CODE"	=> "2FA kodu",
		"2FA_EXP"		=> "Süresi dolmuş 1 parmak izi",
		"2FA_EXPD"	=> "Süresi doldu",
		"2FA_EXPS"	=> "Süre sonu",
		"2FA_ACTIVE"=> "Aktif Oturumlar",
		"2FA_NOT_FN"=> "Parmak izi bulunamadı",
		"2FA_FP"		=> "Parmak izleri",
		"2FA_NP"		=> "<strong>Giriş başarısız</strong> İki Faktör Kimlik Doğrulama Kodu mevcut değildi. Lütfen tekrar deneyin.",
		"2FA_INV"		=> "<strong>Giriş başarısız</strong> İki Faktör Kimlik Doğrulama Kodu geçersizdi. Lütfen tekrar deneyin.",
		"2FA_FATAL"	=> "<strong>Ölümcül hata</strong> Lütfen Sistem Yöneticisi ile iletişime geçin.",
		));

	//Redirect Messages - These get a plus between each word
	$lang = array_merge($lang,array(
		"REDIR_2FA"						=> "Pardon.İki+faktor+su+anda+kullanilamaz",
		"REDIR_2FA_EN"				=> "2+Faktor+dogrulama+etkin",
		"REDIR_2FA_DIS"				=> "2+Faktor+dogrulama+devre+disi",
		"REDIR_2FA_VER"				=> "2+Faktor+dogrulama+dogrulandi+ve+onaylandi",
		"REDIR_SOM_TING_WONG" => "bazi+seyler+yanlis+gitti+tekrar+deneyin",
		"REDIR_MSG_NOEX"			=> "bu+konu+yok+yada+silinmis",
		"REDIR_UN_ONCE"				=> "kullanici+adi+zaten+degistirilmis",
		"REDIR_EM_SUCC"				=> "eposta+basariyla+guncellendi",
		));

	//Emails
	$lang = array_merge($lang,array(
		"EML_CONF"			=> "E-postanızı Onaylayın",
		"EML_VER"				=> "Eposta adresinizi doğrulayın",
		"EML_CHK"				=> "E-posta isteği alındı. Doğrulama yapmak için lütfen e-postanızı kontrol edin. Doğrulama bağlantısının süresinin dolmasıyla Spam ve Önemsiz klasörünüzü kontrol ettiğinizden emin olun.",
		"EML_MAT"				=> "e-posta adresiniz eşleşmedi. Doğrulama bağlantısının süresinin dolmasıyla Spam ve Önemsiz klasörünüzü kontrol ettiğinizden emin olun.",
		"EML_HELLO"			=> "Merhaba ",
		"EML_HI"				=> "Merhaba ",
		"EML_AD_HAS"		=> "Yönetici şifrenizi sıfırladı.",
		"EML_AC_HAS"		=> "Yönetici hesabınızı oluşturdu.",
		"EML_REQ"				=> "Yukarıdaki bağlantıyı kullanarak şifrenizi ayarlamanız istenecektir.",
		"EML_EXP"				=> "Lütfen dikkat, Parola bağlantılarının süresi doluyor ",
		"EML_VER_EXP"		=> "Lütfen, Doğrulama bağlantılarının süresinin dolduğunu unutmayın. ",
		"EML_CLICK"			=> "Giriş yapmak için buraya tıklayın.",
		"EML_REC"				=> "Giriş yaptıktan sonra şifrenizi değiştirmeniz önerilmektedir.",
		"EML_MSG"				=> "Gelen yeni bir mesajınız var.",
		"EML_REPLY"			=> "Konuyu cevaplamak veya görüntülemek için buraya tıklayın",
		"EML_WHY"				=> "Bu e-postayı, şifrenizi sıfırlamak için bir istek yapıldığından dolayı alıyorsunuz. Bu siz değilseniz, bu e-postayı göz ardı edebilirsiniz.",
		"EML_HOW"				=> "Bu sizseniz, şifre sıfırlama işlemine devam etmek için aşağıdaki bağlantıyı tıklayın.",
		"EML_EML"				=> "E-postanızı değiştirme isteği kullanıcı hesabınızdan yapıldı.",
		"EML_VER_EML"		=> "Üye olduğunuz için teşekkürler. E-posta adresinizi doğruladıktan sonra giriş yapmaya hazır olacaksınız! E-posta adresinizi doğrulamak için lütfen aşağıdaki bağlantıyı tıklayın.",

		));

		//Verification
		$lang = array_merge($lang,array(
			"VER_SUC"			=> "Email adresin onaylandı!",
			"VER_FAIL"		=> "Hesabınızı doğrulayamadık. Lütfen tekrar deneyin.",
			"VER_RESEND"	=> "Doğrulama e-postasını tekrar gönder",
			"VER_AGAIN"		=> "E-posta adresinizi girin ve tekrar deneyin",
			"VER_PAGE"		=> "<li>E-postanızı kontrol edin ve size gönderilen bağlantıyı tıklayın</li><li>Oldu!</li>",
			"VER_RES_SUC" => "<p>Doğrulama bağlantınız e-posta adresinize gönderildi.</p><p>Doğrulamayı tamamlamak için e-postadaki bağlantıya tıklayın. E-posta gelen kutunuzda değilse spam klasörünüzü kontrol ettiğinizden emin olun.</p><p>Doğrulama bağlantıları yalnızca ",
			"VER_OOPS"		=> "Hata! Bir şeyler ters gitti, belki tıkladığınız eski bir sıfırlama bağlantısı. Tekrar denemek için aşağıyı tıklayın",
			"VER_RESET"		=> "Şifreniz sıfırlandı!",
			"VER_INS"			=> "<li>E-posta adresinizi girin ve Sıfırla'yı tıklayın.</li> <li>E-postanızı kontrol edin ve size gönderilen bağlantıyı tıklayın.</li>
												<li>Ekrandaki yönergeleri takip edin</li>",
			"VER_SENT"		=> "<p>Şifre sıfırlama bağlantınız e-posta adresinize gönderildi.</p>
			    							<p>Şifrenizi sıfırlamak için e-postadaki bağlantıya tıklayın. E-posta gelen kutunuzda değilse spam klasörünüzü kontrol ettiğinizden emin olun.</p><p>Bağlantıları sıfırla yalnızca ",
			"VER_PLEASE"	=> "Lütfen şifrenizi sıfırlayın",
			));

	//User Settings
	$lang = array_merge($lang,array(
		"SET_PIN"				=> "PIN'i sıfırla",
		"SET_WHY"				=> "Bunu neden değiştiremiyorum?",
		"SET_PW_MATCH"	=> "Yeni Şifre ile Eşleşmeli",

		"SET_PIN_NEXT"	=> "Bir dahaki sefer doğrulamanız gerektiğinde yeni bir PIN belirleyebilirsiniz.",
		"SET_UPDATE"		=> "Kullanıcı ayarlarınızı güncelleyin",
		"SET_NOCHANGE"	=> "Yönetici kullanıcı adlarını değiştirmeyi devre dışı bıraktı.",
		"SET_ONECHANGE"	=> "Yönetici, kullanıcı adı değişikliklerini yalnızca bir kez gerçekleştirecek şekilde ayarladı ve siz zaten yaptınız.",

		"SET_GRAVITAR"	=> "<strong>Profil resmini değiştirmek ister misin? </strong><br> <a href='https://en.gravatar.com/'>https://tr.gravatar.com/</a> adresini ziyaret et ve bu sitede kullandığınız e-posta ile bir hesap oluşturun. Milyonlarca sitede çalışır. Hızlı ve kolay!",

		"SET_NOTE1"			=> "<p><strong>lütfen aklınızda bulundurun</strong> e-posta adresinizi güncellemek için bekleyen bir istek var",

		"SET_NOTE2"			=> ".</p><p>Lütfen bu isteği tamamlamak için doğrulama e-postasını kullanın.</p>
		<p>Yeni bir doğrulama e-postasına ihtiyacınız varsa, lütfen yukarıdaki e-postayı tekrar girin ve isteği tekrar gönderin.</p>",

		"SET_PW_REQ" 		=> "parola, e-posta veya PIN'i sıfırlamak için gerekli",
		"SET_PW_REQI" 	=> "Şifrenizi değiştirmek için gerekli",

		));

	//Errors
	$lang = array_merge($lang,array(
		"ERR_FAIL_ACT"		=> "Aktif oturumlar öldürülemedi, Hata:",
		"ERR_EMAIL"				=> "E-posta, hata nedeniyle gönderilmedi. Lütfen site yöneticisiyle iletişime geçin.",
		"ERR_EM_DB"				=> "Bu e-posta veritabanımızda mevcut değil",
		"ERR_TC"					=> "Lütfen şartları ve koşulları okuyup kabul edin",
		"ERR_CAP"					=> "Captcha Testinde başarısız oldun, Robot!",
		"ERR_PW_SAME"			=> "Eski şifreniz yeni şifrenizle aynı olamaz",
		"ERR_PW_FAIL"			=> "Geçerli şifre doğrulaması başarısız oldu. Güncelleme başarısız oldu. Lütfen tekrar deneyin.",
		"ERR_GOOG"				=> "<strong>NOT:</strong> İlk başta Google / Facebook hesabınızla kaydolduysanız, şifrenizi değiştirmek için şifreyi unuttum kısmını kullanmanız gerekecek…",
		"ERR_EM_VER"			=> "E-posta doğrulaması etkin değil. Lütfen Sistem Yöneticisine başvurun.",
		"ERR_EMAIL_STR"		=> "Bir şey garip. Lütfen e-postanızı tekrar doğrulayın. Rahatsızlıktan dolayı özür dileriz",

		));

	//Maintenance Page
	$lang = array_merge($lang,array(
		"MAINT_HEAD"		=> "Yakında döneceğiz!",
		"MAINT_MSG"			=> "Verdiğimiz rahatsızlıktan dolayı üzgünüz, şu anda bazı bakımlar yapıyoruz. <br> Kısa süre sonra tekrar çevrimiçi olacağız!",
		"MAINT_BAN"			=> "Afedersiniz. Engellendiniz. Bunun bir hata olduğunu düşünüyorsanız, lütfen yöneticiye başvurun.",
		"MAINT_TOK"			=> "Formunuzda bir hata oluştu. Lütfen geri dönün ve tekrar deneyin. Lütfen formu yenileyerek formu göndermenin hataya neden olacağını unutmayın. Bu devam ederse, lütfen yöneticiye başvurun.",
		"MAINT_OPEN"		=> "Açık Kaynak PHP Kullanıcı Yönetim Çerçevesi.",
		"MAINT_PLEASE"	=> "Başarıyla yüklediniz UserSpice! <br> Başlarken belgelerimizi görüntülemek için lütfen adresini ziyaret edin."
		));

		//dataTables Added in 4.4.08
		//NOTE: do not change the words like _START_ between the two _ symbols!
		$lang = array_merge($lang,array(
		"DAT_SEARCH"    => "Ara",
		"DAT_FIRST"     => "Birinci",
		"DAT_LAST"      => "Sonuncu",
		"DAT_NEXT"      => "Sonraki",
		"DAT_PREV"      => "Önceki",
		"DAT_NODATA"        => "tablo da veri yok",
		"DAT_INFO"          => "_TOTAL_ girdiden _START_ ile _END_ arasında",
		"DAT_ZERO"          => "0 girdiden 0 ile 0 arasındakiler gösteriliyor",
		"DAT_FILTERED"      => "(_MAX_ toplam giriş)",
		"DAT_MENU_LENG"     => "_MENU_ giriş göster",
		"DAT_LOADING"       => "Yükleniyor...",
		"DAT_PROCESS"       => "İşleniyor...",
		"DAT_NO_REC"        => "Hiçbir eşleşen kayıt bulunamadı",
		"DAT_ASC"           => "Artan sütunu sıralamak için etkinleştir",
		"DAT_DESC"          => "Azalan sütunu sıralamak için etkinleştir",
		));

		

//LEAVE THIS LINE AT THE BOTTOM.  It allows users/lang to override these keys
if(file_exists($abs_us_root.$us_url_root."usersc/lang/".$lang["THIS_CODE"].".php")){
	include($abs_us_root.$us_url_root."usersc/lang/".$lang["THIS_CODE"].".php");
}
?>
