<?php
/**
 * CodeIgniter
 *
 * PHP için açık kaynak uygulama geliştirme çerçevesi
 *
 * Bu içerik MIT Lisansı (MIT) altında yayınlanmıştır
 *
 * Telif Hakkı (c) 2014 - 2017, British Columbia Institute of Technology
 *
 * Bu yazılımın ve ilgili dokümantasyon dosyalarının (Yazılım) bir kopyasını
 * ücretsiz olarak elde eden herhangi bir kişiye, sınırlama olmaksızın
 * Yazılım'ı kullanma, kopyalama, değiştirme, birleştirme, yayımlama, dağıtma,
 * alt lisanslama ve/veya Yazılım'ın kopyalarını satma hakkı verilmiştir ve
 * Yazılım'ın sağlandığı kişilere aşağıdaki koşullar altında bunu yapmalarına
 * izin verilir:
 *
 * Yukarıdaki telif hakkı bildirimi ve bu izin bildirimi Yazılım'ın tüm kopyalarına
 * veya önemli bölümlerine dahil edilmelidir.
 *
 * YAZILIM, SATILABİLİRLİLİK, BELİRLİ BİR AMACA UYGUNLUK VE İHLAL EDİLMEMESİ DAHİL
 * ANCAK BUNLARLA SINIRLI OLMAMAK ÜZERE, HERHANGİ BİR TÜRDE GARANTİ OLMAKSIZIN
 * "OLDUĞU GİBİ" SAĞLANIR. HİÇBİR DURUMDA YAZARLAR VEYA TELİF HAKKI SAHİPLERİ,
 * YAZILIM VEYA YAZILIM'IN KULLANIMI VEYA DİĞER İŞLEMLERLE İLGİLİ, SÖZLEŞME, HAKSIZ
 * FİİL VEYA BAŞKA BİR DURUMDA HERHANGİ BİR İDDİA, HASAR VEYA DİĞER SORUMLULUKLARDAN
 * SORUMLU OLMAYACAKTIR.
 *
 * @package	CodeIgniter
 * @author	EllisLab Geliştirici Ekibi
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2017, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT Lisansı
 * @link	https://codeigniter.com
 * @since	Sürüm 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('Doğrudan erişime izin verilmez');

$lang['email_must_be_array'] = 'E-posta doğrulama yöntemi bir dizi olarak iletilmelidir.';
$lang['email_invalid_address'] = 'Geçersiz e-posta adresi: %s';
$lang['email_attachment_missing'] = 'Aşağıdaki e-posta eki bulunamıyor: %s';
$lang['email_attachment_unreadable'] = 'Bu ek açılamıyor: %s';
$lang['email_no_from'] = '"From" başlığı olmadan e-posta gönderilemez.';
$lang['email_no_recipients'] = 'Alıcılar belirtilmelidir: To, Cc veya Bcc';
$lang['email_send_failure_phpmail'] = 'PHP mail() kullanılarak e-posta gönderilemiyor. Sunucunuz bu yöntemi kullanarak e-posta göndermek için yapılandırılmamış olabilir.';
$lang['email_send_failure_sendmail'] = 'PHP Sendmail kullanılarak e-posta gönderilemiyor. Sunucunuz bu yöntemi kullanarak e-posta göndermek için yapılandırılmamış olabilir.';
$lang['email_send_failure_smtp'] = 'PHP SMTP kullanılarak e-posta gönderilemiyor. Sunucunuz bu yöntemi kullanarak e-posta göndermek için yapılandırılmamış olabilir.';
$lang['email_sent'] = 'Mesajınız aşağıdaki protokol kullanılarak başarıyla gönderildi: %s';
$lang['email_no_socket'] = 'Sendmail için socket açılamıyor. Lütfen ayarları kontrol edin.';
$lang['email_no_hostname'] = 'SMTP sunucu adını belirtmediniz.';
$lang['email_smtp_error'] = 'Karşılaşılan SMTP hatası: %s';
$lang['email_no_smtp_unpw'] = 'Hata: SMTP kullanıcı adı ve şifre tanımlamalısınız.';
$lang['email_failed_smtp_login'] = 'AUTH LOGIN komutu gönderilemedi. Hata: %s';
$lang['email_smtp_auth_un'] = 'Kullanıcı adı doğrulaması başarısız. Hata: %s';
$lang['email_smtp_auth_pw'] = 'Şifre doğrulaması başarısız. Hata: %s';
$lang['email_smtp_data_failure'] = 'Veri gönderilemiyor: %s';
$lang['email_exit_status'] = 'Çıkış durum kodu: %s';
