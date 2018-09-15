<?php

//Notre page de produit

$wands = array(
    'description' => "A wand is a quasi-sentient magical instrument through which a witch or wizardchannels her or his magical powers to centralise the effects for more complex results. Most spells are done with the aid of wands, but spells can be cast without the use of wands. Wandless magic is, however, very difficult and requires much concentration and incredible skill; advanced wizards and some magical creatures such as house elves are known to perform such magic.
Wands are manufactured and sold by wandmakers, the most famous of these in Great Britain being Ollivander, and in Eastern Europe Gregorovitch. Each wand consists of a specific type of wood that surrounds a core of magical substance. Although the wand cores may come from the same creature, or the wood may come from the same tree, no two existing wands are exactly alike. The study of the history and the magical properties of wands is called wandlore.",
    'wandDumbledore' => array (
        'name' => 'Wand of Elder wood',
        'woodType' => "Elder",
        'description' => "The rarest wand wood of all, and reputed to be deeply unlucky, the elder wand is trickier to master than any other. It contains powerful magic, but scorns to remain with any owner who is not the superior of his or her company; it takes a remarkable wizard to keep the elder wand for any length of time.",
        'price' => '45',
        'imagePath' => "images/wand_dumbledore.jpg",
    ),
    'wandHarry' => array(
        'name' => 'Wand of Holly wood',
        'woodType' => 'Holly',
        'description' =>"Holly is one of the rarer kinds of wand woods; traditionally considered protective, it works most happily for those who may need help overcoming a tendency to anger and impetuosity.",
        'price' => '40',
        'imagePath' => "images/wand_harry.jpg",
    ),
    'wandHermione' => array(
        'name' => 'Wand of Vine wood',
        'woodType' => 'Vine',
        'description' => "Vine wands are among the less common types, and I have been intrigued to notice that their owners are nearly always those witches or wizards who seek a greater purpose, who have a vision beyond the ordinary and who frequently astound those who think they know them best.",
        'price' => "35",
        'imagePath' => "images/wand_hermione.jpg",
    ),
    'wandRon' => array(
        'name' => 'Wand of Willow Wood',
        'woodType' => 'Willow',
        'description' => "	Willow is an uncommon wand wood with healing power, and I have noted that the ideal owner for a willow wand often has some (usually unwarranted) insecurity, however well they may try and hide it.",
        'price' => "35",
        'imagePath' => "images/wand_ron.jpg",
    ),
    'wandSiriusBlack' => array(
        'name' => 'Wand of Black Walnut Wood',
        'woodType' => 'Black Walnut',
        'description' => "	Less common than the standard walnut wand, that of black walnut seeks a master of good instincts and powerful insight. Black walnut is a very handsome wood, but not the easiest to master",
        'price' => "40",
        'imagePath' => "images/wand_sirius_black.jpg",
    ),
    'wandVoldemort' => array(
        'name' =>'Wand of Yew wood',
        'woodType' => 'Yew',
        'description' => "Yew wands are among the rarer kinds, and their ideal matches are likewise unusual, and occasionally notorious. The wand of yew is reputed to endow its possessor with the power of life and death",
        'price' => "40",
        'imagePath' => "images/wand_voldemort.jpg",
    ),
);

$brooms = array(
    'description' => "Broomsticks, also known as brooms, are one of the means employed by wizards and witches to transport themselves between locations. Their use in Great Britainand Ireland is regulated by the Ministry of Magic's Broom Regulatory Control.
The earliest recorded use of the broomstick was in 962 in a German illustrated manuscript. Only wizards and witches appear to use broomsticks in the wizarding world. House-elves, for example, use Apparition. Broomsticks appear to have a bit of personality of their own, as they are able to respond to the simplest of commands, such as \"Up!\".
",
    'broomAirWaveGold' => array(
        'name' => 'Broom Air Wave Gold',
        'description' => "The Air Wave Gold was a racing broom, apparently manufactured in the 1990s. In 1996, the Seeker Weekly magazine compared the Air Wave Gold to the Turbo XXXto see which one was better",
        'price' => "70",
        'imagePath' => "images/broom_AirWaveGold.png",
    ),
    'broomAustralianFlyabout' => array(
        'name' => 'Broom Australian FlyAbout',
        'description' => "The Australian Flyabout 50 was a world-class racing broom, produced in Australia. The Australian National Quidditch team rode on Australian Flyabout 50s during the 422nd Quidditch World Cup matches, in 1994",
        'price' => "80",
        'imagePath' => "images/broom_Australian_Flyabout.png",
    ),
    'broomNimbus2000' => array(
        'name' => "Broom Nimbus 2000",
        'description' => "The Nimbus 2000 was produced by the Nimbus Racing Broom Company as part of their successful line of racing brooms. At the time of it's release in 1991, it was the fastest broomstick in production. The Nimbus 2000 easily outperformed its competitors on the Quidditch pitch until it was replaced as the top broomstick by the Nimbus 2001.",
        'price' => "90",
        'imagePath' => "images/broom_Nimbus_2000_1.jpg",
    ),
    'broomNimbus2001' => array(
        'name' => "Broom Nimbus 2001",
        'description' => "The Nimbus 2001 was produced by the Nimbus Racing Broom Company as part of their successful line of racing brooms. Released in August, 1992, it was faster than its predecessor, the Nimbus 2000. It officially became the fastest broom in existence, until the launch of the Firebolt in 1993. The broom itself is black and silver with revolving stirrups. Despite the Firebolt being faster, the Nimbus 2001 is still used by the majority of Quidditch teams across the globe.",
        'price' => "100",
        'imagePath' => "images/broom_Nimbus_2001.png",
    ),

);

$books = array(
    'description' => "There are a variety of classes taught at Hogwarts School of Witchcraft and Wizardry. These include both the core curriculum and the electives, available from third yearforward. In the fifth year, students take the Ordinary Wizarding Level (O.W.L.) exams to determine whether they can achieve a score high enough to continue to N.E.W.T.-level (Nastily Exhausting Wizarding Test) for the class in the remaining two years. Some classes, including the core classes, may be dropped in sixth year. Specialised classes such as Alchemy become available in sixth year provided there is sufficient demand.
Even though students cannot apply for Time-Turners to take more classes than are able to fit in the timetables, a student's head of house may suggest a Time-Turner to an individual on very rare occasions. All students do, however, have a choice to drop a course if they become a burden (aside from the essential classes).
",
    'bookAstronomy' => array(
        'name' => "Book for Astronomy",
        'description' => "Astronomy is a core class and subject taught at Hogwarts School of Witchcraft and Wizardry. Astronomy is a branch of magic that studies stars and the movement of planets. It is a subject where the use of practical magic during lessons was not necessary.
Uagadou students are known to be skilled in Astronomy, implying the teaching that is provided at Uagadou is excellent.
",
        'course' => "Astronomy",
        'price' => "100",
        'imagePath' => "images/book_astronomy.jpg",
    ),
    'bookCharms' => array(
        'name' => "Book for Charms",
        'description' => "Charms is a core class and subject taught at Hogwarts School of Witchcraft and Wizardry and Ilvermorny School of Witchcraft and Wizardry. Unsurprisingly, it specialises in the teaching of charms. Even though mastering the science of charmwork is clearly essential to performing the greater part of magic, charmwork is seen as a \"softer option\" by some such as Augusta Longbottom who, incidentally, failed her Charms O.W.L. 
Professor Filius Flitwick taught Charms for many years. It was rumoured that his expertise with charmwork made him a duelling champion.
",
        'course' => "Charms",
        'price' => "125",
        'imagePath' => "images/book_charms.jpg",
    ),
    'bookDarkArts' => array(
        'name' => "Book for Dark Arts",
        'description' => "Dark Arts was a class taught at several wizarding schools. Unforgivable Cursesand numerous other forms of Dark magic were taught in this class. It is possible that students were used as victims as a form of punishment.",
        'course' => "Dark Arts",
        'price' => "135",
        'imagePath' => "images/book_dark_arts.jpg",
    ),
    'bookDefenceAgainstDarkArts' => array(
        'name' => "Book for Defence Against Dark Arts",
        'description' => "Defence Against the Dark Arts (sometimes written as DADA) is a subject taught at Hogwarts School of Witchcraft and Wizardry and Ilvermorny School of Witchcraft and Wizardry. In this class students learn how to magically defend themselves against Dark Creatures, the Dark Arts, and other dark charms. Offensive magic is also taught in this class, such as how to duel, which requires the use of both offensive and defensive magic.
The subject is core class at Hogwarts. The position of Defence Against the Dark Arts professor here was once rumoured to be jinxed, as no teacher could hold the post for more than a year. Tom Marvolo Riddle jinxed the position because Dumbledore did not give him the job when he applied for it.[3] The fact that no teacher has lasted longer then year meant that the subject has had numerous Professors.
Ilvermorny began teaching the subject in the 17th century. Also Harry Potterwould occasionally deliver Defence Against the Dark Arts lectures at Hogwarts.
",
        'course' => "Defence Against Dark Arts",
        'price' => "135",
        'imagePath' => "images/book_defence_against_dark_arts.jpg",
    ),
    'bookFlying' => array(
        'name' => "Book for Flying",
        'description' => "Flying, also known as Broom Flight Class, is a subject taught at Hogwarts School of Witchcraft and Wizardry. It is taught by Madam Hooch to first-years only. The subject teaches students how to fly broomsticks. In some lessons, the use of enchanted rings was used to guide flight",
        'course' => "Flying",
        'price' => "110",
        'imagePath' => "images/book_flying.jpg",
    ),
    'bookHerbology' => array(
        'name' => "Book for Herbology",
        'description' => "Herbology is the study of magical and mundane plants and fungi, making it the wizarding equivalent to botany. Herbology is a core class and subject taught at Hogwarts School of Witchcraft and Wizardry and Castelobruxo in which students learn to care for and utilise plants, learn about their magical properties and what they are used for. Many plants provide ingredients for potions and medicine, while others have magical effects of their own right.",
        'course' => "Herbology",
        'price' => "105",
        'imagePath' => "images/book_herbology.jpg",
    ),
    'bookMuggleStudies' => array(
        'name' => "Book for Muggle Studies",
        'description' => "Muggle Studies is an elective class and part of the non-magical studies curriculum at Hogwarts School of Witchcraft and Wizardry. It is exactly what the name implies the study of the daily lives of Muggles and how they cope with electricity, technology and science, and not magic.
The subject was made compulsory in 1997 by Lord Voldemort, and instead of facts being taught regarding muggles the class was used to spread prejudice and lies.
",
        'course' => "Muggle Studies",
        'price' => "140",
        'imagePath' => "images/book_muggle_studies.jpg",
    ),
    'bookPotions' => array(
        'name' => "Book for Potions",
        'description' => "Potions is a core class and subject taught at Hogwarts School of Witchcraft and Wizardry and Ilvermorny School of Witchcraft and Wizardry. In this class, students learn the correct way to brew potions. They follow specific recipes and use various magical ingredients to create the potions, starting with simple ones and moving to more advanced ones as they progress in knowledge. A standard potions kit includes plant ingredients such as Belladonna and supplies such as glass phials and weighing scales.
The professor of this subject is referred to as a Potions Master. The Potions Masterat Hogwarts for many years was Horace Slughorn and later Severus Snape. By 2016, Professor Slughorn had retired for a second time, and an unidentified teacher had taken over.
",
        'course' => "Potions",
        'price' => "145",
        'imagePath' => "images/book_potions.jpg",
    ),
    'bookTransfiguration' => array(
        'name' => "Book for Transfiguration",
        'description' => "Transfiguration is a core class and subject taught at Hogwarts School of Witchcraft and Wizardry. It teaches the art of changing the form and appearance of an object or a person. This type of magic is commonly referred to as \"Transfiguration\" and is considered both complex and dangerous.
There are limits to Transfiguration, which are governed by Gamp's Law of Elemental Transfiguration. There are also many branches, including Cross-Species Transfiguration and Human Transfiguration. This type of magic is regarded as \"very hard work\" and is \"more scientific\" than Charmswork. One has to get it exactly right for the transfiguration to be successful. 
The professor of this subject for many years was Albus Dumbledore and later Minerva McGonagall. It is unknown who the teacher was before Professor Dumbledore and who took over when Professor McGonagall became headmistress of Hogwarts.
",
        'course' => "Transfiguration",
        'price' => "130",
        'imagePath' => "images/book_transfiguration.jpg",
    ),
);

?>