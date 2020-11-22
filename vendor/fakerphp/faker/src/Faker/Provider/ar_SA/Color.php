<?php

namespace Faker\Provider\ar_SA;

class Color extends \Faker\Provider\Color
{
    protected static $safeColorNames = array(
        'أسود', 'قرمزي', 'أخضر', 'أزرق داكن', 'زيتوني',
        'أرجواني', 'أحمر', 'ليمي', 'أزرق', 'فضي',
        'رمادي', 'أصفر', 'برتقالي', 'بني', 'أبيض'
    );

    /**
     * @link https://ar.wikipedia.org/wiki/%D9%82%D8%A7%D8%A6%D9%85%D8%A9_%D8%A7%D9%84%D8%A3%D9%84%D9%88%D8%A7%D9%86_(%D9%85%D8%AA%D8%B6%D8%A7%D9%85%D8%A9)
     **/
    protected static $allColorNames = array(
        'استقلالي', 'انصهاري الذهب', 'أبنوسي', 'أبيض', 'أبيض الشبح', 'أبيض زهوري', 'أبيض عتيق', 'أبيض مضاد للإشعاع',
        'أبيض هولندي', 'أحمر الأبنية', 'أحمر التفاح المحلى', 'أحمر التفاح المحلى الداكن', 'أحمر الفالون',
        'أحمر الفيراري', 'أحمر إمبراطوري', 'أحمر إنجليزي', 'أحمر باستيلي داكن', 'أحمر توسكاني عميق',
        'أحمر جامعة بوسطن', 'أحمر حرس السواحل', 'أحمر داكن', 'أحمر ديبيان', 'أحمر صيني', 'أحمر طوبي', 'أحمر عقيقي',
        'أحمر كادميومي', 'أحمر كارمن', 'أحمر مرجاني', 'أحمر مطفئة الحريق', 'أحمر نحاسي', 'أحمر هندي', 'أخضر (بانتون)',
        'أخضر (ح ص ز)', 'أخضر (صباغ)', 'أخضر (عجلة الألوان) (أخض )', 'أخضر (كريولا)', 'أخضر (لون)', 'أخضر (مونسل)',
        'أخضر (نظام الألوان الطبيعية)', 'أخضر الصياد', 'أخضر الغابة (تقليدي)', 'أخضر الغابة (وب)', 'أخضر الهند',
        'أخضر أندرويد', 'أخضر إسلامي', 'أخضر إلكتروني', 'أخضر إنجليزي', 'أخضر باستيلي داكن', 'أخضر بحري داكن',
        'أخضر برونسويكي', 'أخضر بنغلاديشي', 'أخضر تشارلستون', 'أخضر تفاحي', 'أخضر تمويهي', 'أخضر جامعة كاليفورنيا م ت',
        'أزرق جامعة كامبريدج', 'أخضر جيشي', 'أخضر دارتموثي', 'أخضر داكن', 'أخضر دغلي', 'أخضر دغلي داكن',
        'أخضر دغلي عميق', 'أخضر ربيعي داكن', 'أخضر زيتوني داكن', 'أخضر سباقي بريطاني', 'أخضر سرخسي',
        'أخضر طحالبي داكن', 'أخضر قاروري', 'أخضر كادميومي', 'أخضر كاستلتون', 'أخضر كاريبي', 'أخضر مزرق',
        'أخضر مضيء', 'أخضر مكتبي', 'أخضر هوكر', 'أرجواني إلكرتوني', 'أرجواني إمبراطوري', 'أرجواني باستيلي داكن',
        'أرجواني فوشي', 'أرجواني قطيفي', 'أرجواني هان', 'أزرق', 'أزرق (ح ص ز)', 'أزرق (صبغة)', 'أزرق (كريولا)',
        'أزرق (مونسل)', 'أزرق (نظام الألوان الطبيعية)', 'أزرق اردوازي داكن', 'أزرق البحرية مضيء',
        'أزرق التفوق الجوي', 'أزرق السماء الإيطالي', 'أزرق السماء الفرنسي', 'أزرق العاشقين', 'أزرق الهونولولو',
        'أزرق أليس', 'أزرق إلكتروني', 'أزرق إلكتروني داكن', 'أزرق إمبراطوري', 'أزرق إمبراطوري داكن', 'إزرق إيتون',
        'أزرق باستيلي داكن', 'أزرق بوندي', 'أزرق جامعة براندايس', 'أزرق جامعة ديوك', 'أزرق جامعة كارولينا',
        'أزرق جامعة كولومبيا', 'أزرق جوي (القوات الجوية الأمريكية)', 'أزرق جوي (سلاح الجو الملكي)',
        'أزرق حرس السواحل', 'أزرق داكن', 'أزرق رمادي', 'أزرق سماوي داكن', 'أزرق سماوي عميق', 'أزرق سيروليان',
        'أزرق طفولي', 'أزرق عاصفي', 'أزرق عيني الطفل', 'أزرق فرنسا', 'أزرق فرنسي', 'أزرق فريق دودجر',
        'أزرق قنطريوني', 'أزرق كاتالينا', 'أزرق كاديتي', 'أزرق كروي', 'أزرق كلين العالمي', 'أزرق مسحوقي داكن',
        'أزرق مصري', 'أزرق هان', 'أزرق هوائي', 'أسود', 'أشقر', 'أصفر الكناري', 'أصفر الكوبالت', 'أصفر أريليد',
        'أصفر إلكتروني', 'أصفر برونزي', 'أصفر داكن', 'أصفر ذهبي', 'أصفر كادميومي', 'أصفر متألق',
        'أزرق منتصف الليل الداكن', 'أصفر الأرض', 'أصفر مخضر', 'أصفر موزي', 'أصفر هندي', 'أفوكادوي', 'ألماسي',
        'أمازوني', 'أومبرياوي محروق', 'أيلي', 'إمبراطوري', 'إيزابيلي', 'باذنجاني', 'برتقالي الجزر',
        'برتقالي الجزر العميق', 'برتقالي داكن', 'برتقالي عالمي (جسر البوابة الذهبية)', 'برتقالي عالمي (فضاء جوي)',
        'برتقالي عالمي (هندسة)', 'برتقالي فريق الجيانتس', 'برتقالي كادميومي', 'برتقالي متألق', 'برتقالي محروق',
        'برتقالي مشاب', 'برعمي يونيو', 'برغوثي داكن', 'برغوثي عميق', 'برغوثي فرنسي', 'برقي', 'برونزي', 'برونزي عتيق',
        'برونزي منطلق', 'بندقي الكستناء', 'بندقي الكستناء الداكن', 'بندقي الكستناء العميق', 'بنفسجي إلكتروني',
        'بنفسجي إنجليزي', 'بنفسجي داكن', 'بنفسجي صيني', 'بنفسجي فرنسي', 'بنفسجي مزرق', 'بنفسجي ياباني',
        'بني الحمير', 'بني المتملقين', 'بني داكن', 'بني ذهبي', 'بني كاكاوي', 'بني (وب)', 'بني (تقليدي)',
        'بورغندي', 'بيزنطي', 'بيزنطي داكن', 'ترابي', 'تربي داكن', 'تربي محروق', 'تفاحي جراني سميث', 'تملقي',
        'توردي', 'جاسبري', 'جلدي الجاموس', 'جمشتي', 'جملي', 'جوزي الهند', 'حسائي', 'حممي داكن', 'خامي',
        'خبازي عميق', 'خبازي فرنسي', 'خرنوبي', 'خزامي إلكتروني', 'خزامي إنجليزي', 'خزامي داكن', 'خزامي مضيء',
        'خشخاشي ذهبي', 'خشخاشي منثور', 'خلدي داكن', 'خلدي عميق', 'خوخي عميق', 'خوخي فرنسي', 'دودي قياس', 'دينمي',
        'ذروي', 'ذهبي (معدني)', 'ذهبي (وب)(ذهبي)', 'ذهبي القلب', 'رأسي الموت', 'رقيبي الشمس', 'رماد الأخشاب', 'رمادي',
        'رمادي (رمادي HTML/CSS)', 'رمادي (رمادي X11)', 'رمادي الميدان', 'رمادي-أزرق داكن', 'رمادي اردوازي داكن',
        'رمادي دافي', 'رمادي داكن', 'رمادي البوارج', 'رمادي بارد', 'رمادي خافت', 'رمادي رقيبي الشمس', 'رمادي كاديتي',
        'رمادي متوسط داكن', 'رمادي مزرق', 'زبرجدي', 'زرنيخي', 'زعفراني عميق', 'زمردي', 'زمردي مضيء', 'زنجبيلي',
        'زنجفري', 'زهري النحام', 'زهري إزهار الكرز', 'زهري الحافة', 'زهري الحجاب', 'زهري الحلوى السكرية', 'زهري الصين',
        'زهري القرنفل', 'زهري الكرز', 'زهري باربي', 'زهري بيكر-ميلر', 'زهري ساحر', 'زهري ساخن', 'زهري داكن',
        'زهري طفولي', 'زهري عميق', 'زهري فاندانغو', 'زهري فرنسي', 'زهري فوشي', 'زهري قطيفي', 'زهري كارمن',
        'زهري كارمن العميق', 'زهري متألق', 'زهري مرجاني', 'زيتوني أسود', 'ستري أسود الجلد', 'سحلبي داكن',
        'سقفي', 'سقلاتي داكن', 'سلموني داكن', 'سوسني', 'سيان', 'سيان (طباعي)', 'سيان إلكتروني', 'سيان داكن',
        'سيروليان', 'سيروليان داكن', 'سيروليان مضيء', 'شامباني', 'شامباني عميق', 'شوكولاتي (تقليدي)', 'شوكولاتي (وب)',
        'صبغة خشب الزان', 'صبغي النيلة', 'صحراوي', 'صفروي', 'صقيعي سيرولياني', 'صوفي', 'صوفي فرنسي', 'طوبي',
        'طيني نضيج داكن', 'عاجي', 'عاصفي الغبار', 'عصوي الذهب', 'عصوي الذهب الداكن', 'عظمي', 'علكي', 'عليقي بويزن',
        'عليقي داكن', 'عليقي فرنسي', 'عنبري', 'عنبي', 'عنبري (SAE/ECE)', 'عنبي بري', 'غزلي البنات', 'فاصولي أسود',
        'فاندانغوي', 'فانيلي داكن', 'فحمي', 'فقاعي', 'فلدسباري', 'فوشي', 'فوشي (كريولا)', 'فوشي الموضة', 'فوشي عتيق',
        'فوشي عميق', 'فوشي فرنسي', 'فيروزي داكن', 'فيروزي مضيء', 'قرطبي', 'قرفي', 'قرمزي', 'قرمزي الأليزارين',
        'قرمزي إلكتروني', 'قرمزي جامعة ألاباما', 'قرمزي جامعة هارفارد', 'قشدي', 'قشري البيض', 'قطيفي', 'قندسي',
        'قنطريوني', 'قهوي', 'قهوي اللبن', 'قهوي عميق', 'كابري', 'كاديتي', 'كاردينالي', 'كارمن', 'كارمن عميق',
        'كارمن ياباني', 'كبادي', 'كبدي داكن', 'كبدي داكن (الأحصنة)', 'كتاني', 'كستنائي مضيء', 'كرتوزي (تقليدي)',
        'كرتوزي (وب)', 'كرزي', 'كرزي عميق', 'كرزي هوليوود', 'كلاريتي', 'كمبوجي', 'كوبالتي', 'كوزي العسل', 'لاتيهي كوني',
        'لازوردي', 'لازوردي إلكتروني', 'لازوردي ضبابي(ويب)', 'لحائي داكن', 'لهيبي', 'لوزي', 'لوزي مبيض', 'ليلاكي عميق',
        'ليلاكي فرنسي', 'ليلاكي مضيء', 'ليموني عميق', 'ليموني مر', 'ليمي إلكتروني', 'ليمي فرنسي', 'ليمي مر', 'مائي',
        'ماجنتي داكن', 'ماجنتي ساخن', 'ماجنتي عميق', 'مرجاني', 'مرجاني داكن', 'مسحوقي الطفل', 'مشمشي', 'مصفر', 'معدني',
        'موزي مجنون', 'نبيذي فرنسي', 'نحاسي', 'نحاسي (كريولا)', 'نحاسي أصفر', 'نحاسي عتيق', 'نرجسي أسلي', 'نرجسي كاذب',
        'نيلي (وب)', 'نيلي', 'نيلي إلكتروني', 'نيلي ياباني', 'هليوني', 'هليوني رمادي', 'هندبائي', 'هوائي طلق',
        'وردي أمريكي', 'وردي الأسواق', 'وردي الصين', 'وردي بلغاري', 'وردي فرنسي', 'وردي فوشي', 'وردي قرانيا',
        'وردي كلاسيكي', 'وردي مضيء', 'وردي نحاسي', 'ياسميني', 'ياقوتي أزرق', 'ياقوتي عتيق', 'ياقوتي عميق',
        'ياقوتي مغمور', 'يخضور عام', 'يشبي', 'يوسفي داكن', 'يوسفي ذري', 'يوكاليبتوسي'
    );
}
