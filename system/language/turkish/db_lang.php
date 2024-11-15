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

$lang['db_invalid_connection_str'] = 'Gönderdiğiniz bağlantı dizesine göre veritabanı ayarları belirlenemiyor.';
$lang['db_unable_to_connect'] = 'Sağlanan ayarlarla veritabanı sunucunuza bağlanılamıyor.';
$lang['db_unable_to_select'] = 'Belirtilen veritabanı seçilemiyor: %s';
$lang['db_unable_to_create'] = 'Belirtilen veritabanı oluşturulamıyor: %s';
$lang['db_invalid_query'] = 'Gönderdiğiniz sorgu geçerli değil.';
$lang['db_must_set_table'] = 'Sorgunuzla kullanılacak veritabanı tablosunu belirtmelisiniz.';
$lang['db_must_use_set'] = 'Bir giriş güncellemek için "set" yöntemini kullanmalısınız.';
$lang['db_must_use_index'] = 'Toplu güncellemeler için eşleşecek bir indeks belirtmelisiniz.';
$lang['db_batch_missing_index'] = 'Toplu güncelleme için gönderilen bir veya daha fazla satırda belirtilen indeks eksik.';
$lang['db_must_use_where'] = 'Bir "where" ifadesi içermedikçe güncellemeye izin verilmez.';
$lang['db_del_must_use_where'] = 'Bir "where" veya "like" ifadesi içermedikçe silmeye izin verilmez.';
$lang['db_field_param_missing'] = 'Alanları almak için tablonun adı bir parametre olarak gereklidir.';
$lang['db_unsupported_function'] = 'Kullandığınız veritabanı için bu özellik mevcut değil.';
$lang['db_transaction_failure'] = 'İşlem hatası: Geri alma işlemi yapıldı.';
$lang['db_unable_to_drop'] = 'Belirtilen veritabanı kaldırılamıyor.';
$lang['db_unsupported_feature'] = 'Kullandığınız veritabanı platformunun desteklenmeyen özelliği.';
$lang['db_unsupported_compression'] = 'Seçtiğiniz dosya sıkıştırma formatı sunucunuz tarafından desteklenmiyor.';
$lang['db_filepath_error'] = 'Gönderdiğiniz dosya yoluna veri yazılamıyor.';
$lang['db_invalid_cache_path'] = 'Gönderdiğiniz önbellek yolu geçerli değil veya yazılabilir değil.';
$lang['db_table_name_required'] = 'Bu işlem için bir tablo adı gereklidir.';
$lang['db_column_name_required'] = 'Bu işlem için bir sütun adı gereklidir.';
$lang['db_column_definition_required'] = 'Bu işlem için bir sütun tanımı gereklidir.';
$lang['db_unable_to_set_charset'] = 'İstemci bağlantı karakter seti ayarlanamıyor: %s';
$lang['db_error_heading'] = 'Bir Veritabanı Hatası Oluştu';
