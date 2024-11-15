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
 * @since	Sürüm 3.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('Doğrudan erişime izin verilmez');

$lang['migration_none_found'] = 'Hiçbir geçiş bulunamadı.';
$lang['migration_not_found'] = 'Sürüm numarası %s olan bir geçiş bulunamadı.';
$lang['migration_sequence_gap'] = 'Sürüm numarası %s yakınında geçiş sıralamasında bir boşluk var.';
$lang['migration_multiple_version'] = 'Aynı sürüm numarasına sahip birden fazla geçiş var: %s.';
$lang['migration_class_doesnt_exist'] = 'Geçiş sınıfı "%s" bulunamadı.';
$lang['migration_missing_up_method'] = 'Geçiş sınıfı "%s" bir "up" yöntemi içermiyor.';
$lang['migration_missing_down_method'] = 'Geçiş sınıfı "%s" bir "down" yöntemi içermiyor.';
$lang['migration_invalid_filename'] = 'Geçiş "%s" geçersiz bir dosya adına sahip.';
