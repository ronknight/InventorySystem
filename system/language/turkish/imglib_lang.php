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
 * YAZILIM, SATILABİLİRLİK, BELİRLİ BİR AMACA UYGUNLUK VE İHLAL EDİLMEMESİ DAHİL
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

$lang['imglib_source_image_required'] = 'Tercihlerinizde bir kaynak görüntü belirtmelisiniz.';
$lang['imglib_gd_required'] = 'Bu özellik için GD görüntü kütüphanesi gereklidir.';
$lang['imglib_gd_required_for_props'] = 'Görüntü özelliklerini belirleyebilmek için sunucunuzun GD görüntü kütüphanesini desteklemesi gerekir.';
$lang['imglib_unsupported_imagecreate'] = 'Sunucunuz bu tür görüntüleri işlemek için gereken GD fonksiyonunu desteklemiyor.';
$lang['imglib_gif_not_supported'] = 'GIF görüntüleri genellikle lisans kısıtlamaları nedeniyle desteklenmiyor. Bunun yerine JPG veya PNG görüntüleri kullanmanız gerekebilir.';
$lang['imglib_jpg_not_supported'] = 'JPG görüntüleri desteklenmiyor.';
$lang['imglib_png_not_supported'] = 'PNG görüntüleri desteklenmiyor.';
$lang['imglib_jpg_or_png_required'] = 'Tercihlerinizde belirtilen görüntü boyutlandırma protokolü yalnızca JPEG veya PNG görüntü türleriyle çalışır.';
$lang['imglib_copy_error'] = 'Dosya değiştirilirken bir hata oluştu. Lütfen dosya dizininizin yazılabilir olduğundan emin olun.';
$lang['imglib_rotate_unsupported'] = 'Görüntü döndürme işlemi sunucunuz tarafından desteklenmiyor gibi görünüyor.';
$lang['imglib_libpath_invalid'] = 'Görüntü kütüphanenizin yolu doğru değil. Lütfen görüntü tercihlerinize doğru yolu ayarlayın.';
$lang['imglib_image_process_failed'] = 'Görüntü işleme başarısız oldu. Lütfen sunucunuzun seçilen protokolü desteklediğinden ve görüntü kütüphanenizin yolunun doğru olduğundan emin olun.';
$lang['imglib_rotation_angle_required'] = 'Görüntüyü döndürmek için bir döndürme açısı gereklidir.';
$lang['imglib_invalid_path'] = 'Görüntünün yolu doğru değil.';
$lang['imglib_invalid_image'] = 'Sağlanan görüntü geçerli değil.';
$lang['imglib_copy_failed'] = 'Görüntü kopyalama işlemi başarısız oldu.';
$lang['imglib_missing_font'] = 'Kullanılacak bir yazı tipi bulunamıyor.';
$lang['imglib_save_failed'] = 'Görüntü kaydedilemiyor. Lütfen görüntünün ve dosya dizininin yazılabilir olduğundan emin olun.';
