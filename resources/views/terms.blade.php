@extends("layouts.master")
@section("content")
<img class="banner" src="{{asset("/img")}}/corporate_title_image.jpg" alt="">
    <div class="container content corporate_file">
        <div class="row">
            <div class="col-md-3 sidebar">
                <h4>{{__("home.references")}}</h4>
                <ul>
                    <li>
                    <a href="#cookies_and_privacy">{{__("footer.cookies_and_privacy")}}<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                          </svg></a>
                          <a href="#terms_of_use">{{__("footer.terms_of_use")}}<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                          </svg></a>
                          <a href="#kvkk">{{__("footer.kvkk")}}<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                          </svg></a>
                    </li>
                </ul>
            </div>
            <div class="posts col-md-9">
                <div class="mini_url"><a href="{{url("/")}}">{{__("home.home")}}</a>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;<a href="{{url()->current()}}">{{__("home.terms")}}</a></div>
                <section id="cookies_and_privacy">
                <h2>{{__("footer.cookies_and_privacy")}}</h2>
                <p><strong>ÇEREZ KULLANIMI, GİZLİLİK VE GÜVENLİK POLİTİKASI</strong></p>

                <p>Web sitemizde üzerinden ve fiziki konumumuzdan verilen tüm ürünler, hizmetler ve servisler, firmamıza aittir ve firmamız tarafından işletilir.</p>

                <p>Web sitemizde, çeşitli amaçlarla kişisel veriler toplayabilir. Aşağıda, toplanan kişisel verilerin nasıl ve ne şekilde toplandığı, bu verilerin nasıl ve ne şekilde korunduğu belirtilmiştir.</p>

                <p>Web sitemizde yer alan online site formlarında veya ofisimiz üzerinden çeşitli form ve anketlerin doldurulması suretiyle müşterilerin kendileriyle ilgili bir takım kişisel bilgileri (isim-soy isim, firma bilgileri, telefon, adres veya e-posta adresleri gibi) firmamız tarafından işin doğası gereği toplanmaktadır.</p>

                <p>Web sitemiz bazı dönemlerde müşterilerine ve site ziyaretçilerine kampanya bilgileri, yeni ürünler yada hizmetler hakkında bilgiler, promosyon teklifleri gönderebilir. Müşteriler bu gibi bilgileri almama konusunda gerekli bildirimi firmamızın iletişim sayfasında yer alan kurumsal mail adresine bildirebilirler.</p>

                <p>Fiziki konumumuz, web sitemiz üzerinden veya e-posta ile gerçekleştirilen onay sürecinde, üyelerimiz tarafından firmamıza elektronik ortamdan iletilen kişisel bilgiler, Müşterilerimiz ile yaptığımız sözleşmeler ile belirlenen amaçlar ve kapsam dışında üçüncü kişilere açıklanmayacaktır.</p>

                <p>Web sitemizde, gizli bilgileri kesinlikle özel ve gizli tutmayı, bunu bir sır saklama yükümü olarak addetmeyi ve gizliliğin sağlanması ve sürdürülmesi, gizli bilginin tamamının veya herhangi bir kısmının kamu alanına girmesini veya yetkisiz kullanımını veya üçüncü bir kişiye ifşasını önlemek için gerekli tüm tedbirleri almayı ve gerekli özeni göstermeyi taahhüt etmektedir.</p>

                <p><strong>KREDİ KARTI GÜVENLİĞİ</strong></p>

                <p>Web sitemiz üzerinden kredi kartı bilgileriniz istenmemektedir.</p>

                <p><strong>ÜÇÜNCÜ TARAF WEB SİTELERİ VE UYGULAMALAR</strong></p>

                <p>Firmamız, web sitesi dâhilinde başka sitelere link verebilir. Firmamız bu linkler vasıtasıyla erişilen sitelerin gizlilik uygulamaları ve içeriklerine yönelik herhangi bir sorumluluk taşımamaktadır. İş bu sözleşmedeki Gizlilik Politikası Prensipleri, sadece Firmamızın kullanımına ilişkindir, üçüncü taraf web sitelerini kapsamaz.</p>

                <p><strong>İSTİSNAİ HALLER</strong></p>

                <p>Aşağıda belirtilen sınırlı hallerde Firmamız, işbu "Gizlilik Politikası" hükümleri dışında müşterilere ait bilgileri üçüncü kişilere açıklayabilir. Bu durumlar sınırlı sayıda olmak üzere;</p>

                <p>1. Kanun, Kanun Hükmünde Kararname, Yönetmelik v.b. yetkili hukuki otorite tarafından çıkarılan ve yürürlülükte olan hukuk kurallarının getirdiği zorunluluklara uymak;</p>

                <p>2. Firmamız müşterilerle akdettiği "Hizmet veya Satış Sözleşmesileri"'nin ve diğer sözleşmelerin gereklerini yerine getirmek ve bunları uygulamaya koymak amacıyla;</p>

                <p>3. Yetkili idari ve adli otorite tarafından usulüne göre yürütülen bir araştırma veya soruşturmanın yürütümü amacıyla kullanıcılarla ilgili bilgi talep edilmesi;</p>

                <p>4. Müşterilerin hakları veya güvenliklerini korumak için bilgi vermenin gerekli olduğu hallerdir.</p>

                <p><strong>E-POSTA GÜVENLİĞİ</strong></p>

                <p>Firmamızın kurumsal maillerine, herhangi bir siparişinizle ilgili olarak göndereceğiniz e-postalarda, asla kredi kartı numaranızı veya şifrelerinizi yazmayınız. E-postalarda yer alan bilgiler üçüncü şahıslar tarafından görülebilir. Firmamız e-postalarınızdan aktarılan bilgilerin güvenliğini hiçbir koşulda garanti edemez.</p>

                <p><strong>TARAYICI ÇEREZLERİ</strong></p>

                <p>Firmamız, web sitemizi ziyaret eden kullanıcılar ve kullanıcıların web sitesini kullanımı hakkındaki bilgileri teknik bir iletişim dosyası (Çerez-Cookie) kullanarak elde edebilir. Bahsi geçen teknik iletişim dosyaları, ana bellekte saklanmak üzere bir internet sitesinin kullanıcının tarayıcısına (browser) gönderdiği küçük metin dosyalarıdır. Teknik iletişim dosyası site hakkında durum ve tercihleri saklayarak İnternet'in kullanımını kolaylaştırır.</p>

                <p>Web sitemiz üzerinden google analistik çerezlerinin çalıştığını ve bu çerezlerin eklenme amacı sadece site istatisklerinin takibi olduğunu, site kullanıcılarına ve müşterilerimize bildiririz.</p>

                <p>Teknik iletişim dosyası, siteyi kaç kişinin ziyaret ettiğini, bir kişinin siteyi hangi amaçla, kaç kez ziyaret ettiğini ve ne kadar sitede kaldıkları hakkında istatistiksel bilgileri elde etmeye ve kullanıcılar için özel tasarlanmış kullanıcı sayfalarından dinamik olarak reklam ve içerik üretilmesine yardımcı olur. Teknik iletişim dosyası, ana bellekte veya e-postanızdan veri veya başkaca herhangi bir kişisel bilgi almak için tasarlanmamıştır. Tarayıcıların pek çoğu başta teknik iletişim dosyasını kabul eder biçimde tasarlanmıştır ancak kullanıcılar dilerse teknik iletişim dosyasının gelmemesi veya teknik iletişim dosyasının gönderildiğinde uyarı verilmesini sağlayacak biçimde ayarları değiştirebilirler.</p>

                <p>Firmamız, işbu "Gizlilik Politikası" hükümlerini dilediği zaman sitede yayınlamak veya kullanıcılara elektronik posta göndermek veya sitesinde yayınlamak suretiyle değiştirebilir. Gizlilik Politikası hükümleri değiştiği takdirde, yayınlandığı tarihte yürürlük kazanır.</p>

                <p>Gizlilik politikamız ile ilgili her türlü soru ve önerileriniz için iletişim sayfamızda email adresine gönderebilirsiniz. Firmamıza ait iletişim bilgilerine web sitemizin iletişim sayfasından ulaşabilirsiniz.</p>
                </section>
                <section id="terms_of_use">
                <h2>{{__("footer.terms_of_use")}}</h2>
                <p><strong>SİTE KULLANIM ŞARTLARI</strong></p>

                <p>Web sitemizde yer alan ünvan, işletme adı, marka, patent, logo, tasarım, bilgi ve yöntem gibi tescilli veya tescilsiz tüm fikri mülkiyet hakları site işleteni ve sahibi firmaya veya belirtilen ilgilisine ait olup, ulusal ve uluslararası hukukun koruması altındadır.</p>

                <p>Web sitenin ziyaret edilmesi veya bu sitedeki hizmetlerden yararlanılması söz konusu fikri mülkiyet hakları konusunda hiçbir hak vermez.</p>

                <p>Web sitemizde yer alan bilgiler hiçbir şekilde çoğaltılamaz, yayınlanamaz, kopyalanamaz, sunulamaz ve/veya aktarılamaz. Web sitenin bütünü veya bir kısmı diğer bir internet sitelerinde izinsiz olarak kullanılamaz.</p>
                </section>

                <section id="kvkk">
                <h2>{{__("footer.kvkk")}}</h2>
                <p><strong>KİŞİSEL VERİLERİN İŞLENMESİ AYDINLATMA METNİ (KVKK)</strong></p>

                <p>Firmamız. kişisel verilerinizin hukuka uygun olarak toplanması, saklanması ve paylaşılmasını sağlamak ve gizliliğinizi korumak amacıyla mümkün olan en üst düzayde güvenlik tedbirlerini almaktadır.</p>

                <p>Firma olarak amacımız; 6698 sayılı Kişisel Verilerin Korunması Kanununun 10. maddesi gereğince ve sizlerin memnuniyeti doğrultusunda, kişisel verilerinizin alınma şekilleri, işlenme amaçları, paylaşılan kişiler, hukuki nedenleri ve haklarınız konularında sizi en şeffaf şekilde bilgilendirmektir.</p>

                <p><strong>a) Veri Sorumlusu</strong></p>

                <p>6698 sayılı Kişisel Verilerin Korunması Kanunu (“KVK Kanunu”) uyarınca, kişisel verileriniz; veri sorumlusu olarak, firmamız tarafından aşağıda açıklanan kapsamda işlenebilecektir.</p>

                <p>Veri Sorumlusu sıfatıyla firmamız vermiş olabileceğiniz kişisel bilgilerinizin aşağıda açıklanan şart ve sınırlara bağlı kalınarak kaydedilebileceğini, saklanabileceğini, güncellenebileceğini, mevzuatın izin verdiği durumlarda 3. kişilere açıklanabileceğini / devredilebileceğini, sınıflandırılabileceğini ve KVKK’da sayılan şekillerde işlenebileceğini belirtmek isteriz. Sayılan bu unsurlara dair detaylı açıklamalarımızı aşağıda bulabilirsiniz.</p>

                <p><strong>b) Kişisel Verilerin Hangi Amaçla İşleneceği</strong></p>

                <p>Firmamız tarafından, müşterileri, çalışanları, potansiyel müşterileri, çalışan adayları, iş ortakları ve tedarikçileri gibi taraflardan, kimlik bilgisi, iletişim bilgisi, müşteri bilgisi, müşteri işlem bilgisi, işlem güvenliği bilgisi, hukuki işlem ve uyum bilgisi ile pazarlama satış bilgisi gibi kategorilerde kişisel veri toplanabilmektedir.</p>

                <p>Toplanan kişisel verileriniz;</p>

                <p>- Firma ürün ve hizmetlerinin sizlere sunulabilmesi, sizlere karşı olan yükümlülüklerimizin yerine getirilmesi, kayıt ve belgelerin düzenlenebilmesi, yerel ve uluslararası yasal mevzuatın öngördüğü bilgi saklama, raporlama, bilgilendirme, vergi ve sair yükümlülüklere uymak,</p>

                <p>- Hizmet ve ürünlerin kalitesinin artırılmasına yönelik yapılacak olan satış ve pazarlama faaliyetleri için yapılacak size özel reklam, kampanya, avantajlar ve diğer faydaları sunmak,</p>

                <p>- Finans ve muhasebe, faturalama ve tahsilatlar, bilgi işlem sistemleri, veriler, iş devamlılığı ve kayıtlar, belge ve baskı yönetimi ile bağlantılı olanlar da dahil olmak üzere, iç politika ve prosedürlere uymak,</p>

                <p>- Ürün / Hizmet ve pazarlama faaliyetleri için yapılacak ölçümleme, istatistiki analizleri ve çalışmalarını yürütmek,</p>

                <p>- Müşteri memnuniyetinin artırılması, şikâyet yönetimi, yeni hizmet ve ürünler ile ilgili görüş ve önerilerinizi almak, şikayet ve taleplerinize yönelik tarafınıza bilgi vermek,</p>

                <p>- Siparişlerinizi almak, ödeme işlemlerinizi gerçekleştirmek, 3. kişiler ile lojistik iş birliği sağlayıp ürün gönderimini sağlamak, ilginizi çekebilecek ürün ve hizmetleri önermek, pazarlama, satış, reklam, iletişim,</p>

                <p>- Resmî makamlarca öngörülen bilgi saklama, raporlama, bilgilendirme yükümlülüklerine uymak, sözleşmelerin gerekliliklerini yerine getirmek ve bu hizmetlerden faydalanılmasına ilişkin olarak firmamızın tabi olduğu yasal yükümlülükleri yerine getirmek,</p>

                <p>- Kara para aklamayı önleme ve terör karşıtı yasalar da dahil olmak üzere, yürürlükteki yasalara ve düzenleyici yükümlülüklere (ikamet ülkenizin dışındakiler de dahil) uymak, hukuki sürece uymak ve resmi makamlardan ve devlet makamlarından (ikamet ülkenizin dışındakiler de dahil) gelen talepleri incelemek, değerlendirmek ve yanıtlamak, amaçlarıyla 6698 sayılı Kanun’un 5. ve 6. maddelerinde belirtilen kişisel veri işleme şartları ve amaçları dahilinde işlenecektir.</p>

                <p><strong>c) İşlenen Kişisel Verilerin Kimlere ve Hangi Amaçla Aktarılabileceği</strong></p>

                <p>Toplanan kişisel verileriniz; yukarıda belirtilen amaçların gerçekleştirilmesi ile sınırlı olmak üzere;</p>

                <p>- Firma iş ortaklarına, tedarikçilerine, hissedarlarına ve firma iştiraklerine,</p>

                <p>- Vergi Usul Kanunu, Sosyal Güvenlik Kurumu mevzuatı, Sayıştay, Suç Gelirlerinin Aklanmasının Önlenmesi Hakkında Kanun, Karaparanın Aklanmasının Önlenmesine Dair Kanun, Türk Ticaret Kanunu, Borçlar Kanunu ve diğer mevzuat hükümlerinin izin verdiği kişi veya kuruluşlara,</p>

                <p>- Firmanın insan kaynakları politikalarının yürütülmesinin İK departmanına. </p>

                <p>- Kanunen yetkili kamu kurum ve kuruluşları, idari merciler ve yasal mercilere, 6698 sayılı KVK Kanunu’nun 8. ve 9. maddelerinde belirtilen kişisel veri işleme şartları ve amaçları çerçevesinde aktarılabilecektir.</p>

                <p><strong>ç) Kişisel Veri Toplamanın Yöntemi ve Hukuki Sebebi</strong></p>

                <p>Kişisel verileriniz, firmamız tarafından farklı kanallarla ve farklı hukuki sebeplere dayanarak; firma faaliyetlerini yürütmek amacıyla toplanmaktadır. Bu hukuki sebeple toplanan kişisel verileriniz KVK Kanunu’nun 5. ve 6. maddelerinde belirtilen kişisel veri işleme şartları ve amaçları kapsamında bu Aydınlatma Metni’nin (b) ve (c) maddelerinde belirtilen amaçlarla da işlenebilmekte ve aktarılabilmektedir.</p>

                <p><strong>d) Kişisel Veri Sahibinin KVK Kanunu’nun 11. maddesinde Sayılan Hakları</strong></p>

                <p>Kişisel veri sahipleri olarak, haklarınıza ilişkin taleplerinizi aşağıda düzenlenen yöntemlerle firmamıza iletmeniz durumunda, talebin niteliğine göre talebi en kısa sürede ve en geç otuz gün içinde sonuçlandıracaktır.</p>

                <p>Ancak, Kişisel Verileri Koruma Kurulunca bir ücret tarifesi öngörülmesi halinde, firmamız tarafından, belirlenen tarifedeki ücret alınacaktır. Bu kapsamda kişisel veri sahipleri;</p>

                <p>- Kişisel veri işlenip işlenmediğini öğrenme,</p>

                <p>- Kişisel verileri işlenmişse buna ilişkin bilgi talep etme,</p>

                <p>- Kişisel verilerin işlenme amacını ve bunların amacına uygun kullanılıp kullanılmadığını öğrenme,</p>

                <p>- Yurt içinde veya yurt dışında kişisel verilerin aktarıldığı üçüncü kişileri bilme,</p>

                <p>- Kişisel verilerin eksik veya yanlış işlenmiş olması hâlinde bunların düzeltilmesini isteme ve bu kapsamda yapılan işlemin kişisel verilerin aktarıldığı üçüncü kişilere bildirilmesini isteme,</p>

                <p>- 6698 sayılı Kanun ve ilgili diğer kanun hükümlerine uygun olarak işlenmiş olmasına rağmen, işlenmesini gerektiren sebeplerin ortadan kalkması hâlinde kişisel verilerin silinmesini veya yok edilmesini isteme ve bu kapsamda yapılan işlemin kişisel verilerin aktarıldığı üçüncü kişilere bildirilmesini isteme,</p>

                <p>- İşlenen verilerin münhasıran otomatik sistemler vasıtasıyla analiz edilmesi suretiyle kişinin kendisi aleyhine bir sonucun ortaya çıkmasına itiraz etme,</p>

                <p>- Kişisel verilerin kanuna aykırı olarak işlenmesi sebebiyle zarara uğraması hâlinde zararın giderilmesini talep etme haklarına sahiptir.</p>

                <p>KVK Kanunu’nun 13üncü maddesinin 1inci fıkrası gereğince yukarıda belirtilen haklarınızı kullanmakla ilgili talebinizi, “yazılı” veya Kişisel Verilerin Korunması Kurulunun belirlediği diğer yöntemlerle firmamıza iletmeniz gerekmektedir. </p>

                <p>Kişisel Verilerin Korunması Kurulu şu aşamada herhangi bir yöntem belirlemediği için başvurunuzu, KVK Kanunu’nun amir hükmü gereği yazılı olarak firmamıza iletmeniz gerekmektedir. Bu doğrultuda firmamıza KVK Kanunu’nun 11inci maddesi kapsamında yapacağınız başvurularda, yazılı olarak başvurunuzu ileteceğiniz kanallar ve usuller aşağıda açıklanmaktadır.</p>

                <p>Yukarıda belirtilen haklarınızı kullanmak için kimliğinizi tespit edici gerekli bilgiler ve kullanmak istediğiniz hakkınıza yönelik açıklamalarınızla birlikte, talebinizi KVK Kanunu’nun 11inci maddesinde belirtilen, hangi hakkınızın kullanımına ilişkin olduğunu da belirterek, web sitemizin iletişim sayfasında yer alan fiziki adresimize, iadeli taahhütlü mektup yoluyla veya web sitemizin iletişim sayfasında yer alan e-post adresimize mailinizi alındı teyitli şekilde iletebilirsiniz.</p>

                <p>Talebinizin niteliğine göre kimlik tespitine olanak sağlayacak bilgi ve belgelerin eksiksiz ve doğru olarak tarafımıza sağlanması gerekmektedir. İstenilen bilgi ve belgelerin gereği gibi sağlanmaması durumunda, firma tarafından talebinize istinaden yapılacak araştırmaların tam ve nitelikli şekilde yürütülmesinde sorunlar yaşanabilecektir. Bu durumda, firmamız kanuni haklarını saklı tuttuğunu beyan eder.</p>
                </section>
            </div>
        </div>
    </div>
@endsection