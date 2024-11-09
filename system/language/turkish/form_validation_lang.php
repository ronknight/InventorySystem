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

$lang['form_validation_required']		= '{field} alanı zorunludur.';
$lang['form_validation_isset']			= '{field} alanının bir değeri olmalıdır.';
$lang['form_validation_valid_email']		= '{field} alanı geçerli bir e-posta adresi içermelidir.';
$lang['form_validation_valid_emails']		= '{field} alanı tüm geçerli e-posta adreslerini içermelidir.';
$lang['form_validation_valid_url']		= '{field} alanı geçerli bir URL içermelidir.';
$lang['form_validation_valid_ip']		= '{field} alanı geçerli bir IP içermelidir.';
$lang['form_validation_min_length']		= '{field} alanı en az {param} karakter uzunluğunda olmalıdır.';
$lang['form_validation_max_length']		= '{field} alanı {param} karakterden fazla olamaz.';
$lang['form_validation_exact_length']		= '{field} alanı tam olarak {param} karakter uzunluğunda olmalıdır.';
$lang['form_validation_alpha']			= '{field} alanı yalnızca alfabetik karakterler içerebilir.';
$lang['form_validation_alpha_numeric']		= '{field} alanı yalnızca alfa-nümerik karakterler içerebilir.';
$lang['form_validation_alpha_numeric_spaces']	= '{field} alanı yalnızca alfa-nümerik karakterler ve boşluklar içerebilir.';
$lang['form_validation_alpha_dash']		= '{field} alanı yalnızca alfa-nümerik karakterler, alt çizgiler ve tireler içerebilir.';
$lang['form_validation_numeric']		= '{field} alanı yalnızca sayılar içermelidir.';
$lang['form_validation_is_numeric']		= '{field} alanı yalnızca sayısal karakterler içermelidir.';
$lang['form_validation_integer']		= '{field} alanı bir tam sayı içermelidir.';
$lang['form_validation_regex_match']		= '{field} alanı doğru formatta değil.';
$lang['form_validation_matches']		= '{field} alanı {param} alanı ile eşleşmiyor.';
$lang['form_validation_differs']		= '{field} alanı {param} alanından farklı olmalıdır.';
$lang['form_validation_is_unique'] 		= '{field} alanı benzersiz bir değer içermelidir.';
$lang['form_validation_is_natural']		= '{field} alanı yalnızca rakamlar içermelidir.';
$lang['form_validation_is_natural_no_zero']	= '{field} alanı yalnızca rakamlar içermeli ve sıfırdan büyük olmalıdır.';
$lang['form_validation_decimal']		= '{field} alanı ondalıklı bir sayı içermelidir.';
$lang['form_validation_less_than']		= '{field} alanı {param} değerinden küçük bir sayı içermelidir.';
$lang['form_validation_less_than_equal_to']	= '{field} alanı {param} değerine eşit veya daha küçük bir sayı içermelidir.';
$lang['form_validation_greater_than']		= '{field} alanı {param} değerinden büyük bir sayı içermelidir.';
$lang['form_validation_greater_than_equal_to']	= '{field} alanı {param} değerine eşit veya daha büyük bir sayı içermelidir.';
$lang['form_validation_error_message_not_set']	= 'Alan adı {field} ile ilişkili bir hata mesajına erişilemiyor.';
$lang['form_validation_in_list']		= '{field} alanı şu değerlerden biri olmalıdır: {param}.';
