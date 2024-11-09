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

$lang['upload_userfile_not_set'] = 'userfile adında bir gönderi değişkeni bulunamadı.';
$lang['upload_file_exceeds_limit'] = 'Yüklenen dosya, PHP yapılandırma dosyanızda izin verilen maksimum boyutu aşıyor.';
$lang['upload_file_exceeds_form_limit'] = 'Yüklenen dosya, form tarafından izin verilen maksimum boyutu aşıyor.';
$lang['upload_file_partial'] = 'Dosya yalnızca kısmen yüklendi.';
$lang['upload_no_temp_directory'] = 'Geçici klasör eksik.';
$lang['upload_unable_to_write_file'] = 'Dosya diske yazılamadı.';
$lang['upload_stopped_by_extension'] = 'Dosya yükleme bir uzantı tarafından durduruldu.';
$lang['upload_no_file_selected'] = 'Yüklemek için bir dosya seçmediniz.';
$lang['upload_invalid_filetype'] = 'Yüklemeye çalıştığınız dosya türüne izin verilmiyor.';
$lang['upload_invalid_filesize'] = 'Yüklemeye çalıştığınız dosya izin verilen boyuttan daha büyük.';
$lang['upload_invalid_dimensions'] = 'Yüklemeye çalıştığınız resim izin verilen boyutlara uymuyor.';
$lang['upload_destination_error'] = 'Yüklenen dosya son hedefe taşınmaya çalışılırken bir sorun oluştu.';
$lang['upload_no_filepath'] = 'Yükleme yolu geçerli görünmüyor.';
$lang['upload_no_file_types'] = 'İzin verilen dosya türlerini belirtmediniz.';
$lang['upload_bad_filename'] = 'Gönderdiğiniz dosya adı zaten sunucuda mevcut.';
$lang['upload_not_writable'] = 'Yükleme hedef klasörü yazılabilir görünmüyor.';
