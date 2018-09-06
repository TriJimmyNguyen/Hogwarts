<?php


require_once("constant.php");

$top_view = TOP_VIEW_PATH;
const PAGE_NAME = INDEX_PAGE_NAME;

$pageName = INDEX_PAGE_NAME;
require("$top_view");
require_once("database/products.php");

?>

<div>
    <p>Hagrid raised a gigantic fist and knocked three times on the castle door.</p>
    <p>The door swung open at once. A tall, black-haired witch in emerald-green robes stood there. She had a very stern face and Harry’s first thought was that this was not someone to cross.</p>
    <p>‘The firs’-years, Professor McGonagall,’ said Hagrid.</p>
    <p>‘Thank you, Hagrid. I will take them from here.’</p>
    <p>She pulled the door wide. The Entrance Hall was so big you could have fitted the whole of the Dursleys’ house in it. The stone walls were lit with flaming torches like the ones at Gringotts, the ceiling was too high to make out, and a magnificent marble staircase facing them led to the upper floors.</p>
    <p>They followed Professor McGonagall across the flagged stone floor. Harry could hear the drone of hundreds of voices from a doorway to the right – the rest of the school must already be here – but Professor McGonagall showed the first-years into a small empty chamber off the hall. They crowded in, standing rather closer together than they would usually have done, peering about nervously.</p>
    <p>‘Welcome to Hogwarts,’ said Professor McGonagall. ‘The start-of-term banquet will begin shortly, but before you take your seats in the Great Hall, you will be sorted into your houses. The Sorting is a very important ceremony because, while you are here, your house will be something like your family within Hogwarts. You will have classes with the rest of your house, sleep in your house dormitory and spend free time in your house common room.</p>
    <p>‘The four houses are called Gryffindor, Hufflepuff, Ravenclaw and Slytherin. Each house has its own noble history and each has produced outstanding witches and wizards. While you are at Hogwarts, your triumphs will earn your house points, while any rule-breaking will lose house points. At the end of the year, the house with the most points is awarded the House Cup, a great honour. I hope each of you will be a credit to whichever house becomes yours.</p>
    <p>‘The Sorting Ceremony will take place in a few minutes in front of the rest of the school. I suggest you all smarten yourselves up as much as you can while you are waiting.’</p>
    <p>Her eyes lingered for a moment on Neville’s cloak, which was fastened under his left ear, and on Ron’s smudged nose. Harry nervously tried to flatten his hair.</p>
    <p>‘I shall return when we are ready for you,’ said Professor McGonagall. ‘Please wait quietly.’</p>
    <p>She left the chamber. Harry swallowed.</p>
    <p>‘How exactly do they sort us into houses?’ he asked Ron.</p>
    <p>‘Some sort of test, I think. Fred said it hurts a lot, but I think he was joking.’</p>
    <p>Harry’s heart gave a horrible jolt. A test? In front of the whole school? But he didn’t know any magic yet – what on earth would he have to do? He hadn’t expected something like this the moment they arrived. He looked around anxiously and saw that everyone else looked terrified too. No one was talking much except Hermione Granger, who was whispering very fast about all the spells she’d learnt and wondering which one she’d need. Harry tried hard not to listen to her. He’d never been more nervous, never, not even when he’d had to take a school report home to the Dursleys saying that he’d somehow turned his teacher’s wig blue. He kept his eyes fixed on the door. Any second now, Professor McGonagall would come back and lead him to his </p>
    <p>Then something happened which made him jump about a foot in the air – several people behind him screamed.</p>
    <p>‘What the –?’
    <p>He gasped. So did the people around him. About twenty ghosts had just streamed through the back wall. Pearly-white and slightly transparent, they glided across the room talking to each other and hardly glancing at the first-years. They seemed to be arguing. What looked like a fat little monk was saying, ‘Forgive and forget, I say, we ought to give him a second chance –’</p>
    <p>‘My dear Friar, haven’t we given Peeves all the chances he deserves? He gives us all a bad name and you know, he’s not really even a ghost – I say, what are you all doing here?’ A ghost wearing a ruff and tights had suddenly noticed the first-years. Nobody answered.</p>
    <p>‘New students!’ said the Fat Friar, smiling around at them.</p>
    <p>‘About to be sorted, I suppose?’</p>
    <p>A few people nodded mutely.</p>
    <p>‘Hope to see you in Hufflepuff!’ said the Friar. ‘My old house, you know.’</p>
    <p>‘Move along now,’ said a sharp voice. ‘The Sorting Ceremony’s about to start.’ Professor McGonagall had returned. One by one, the ghosts floated away through the opposite wall.</p>
    <p>‘Now, form a line,’ Professor McGonagall told the first-years, ‘and follow me.’</p>
    <p>Feeling oddly as though his legs had turned to lead, Harry got into line behind a boy with sandy hair, with Ron behind him, and they walked out of the chamber, back across the hall and through a pair of double doors into the Great Hall.</p>
    <p>Harry had never even imagined such a strange and splendid place. It was lit by thousands and thousands of candles which were floating in mid-air over four long tables, where the rest of the students were sitting. These tables were laid with glittering golden plates and goblets. At the top of the Hall was another long table where the teachers were sitting.</p>
    <p>Professor McGonagall led the first-years up here, so that they came to a halt in a line facing the other students, with the teachers behind them. The hundreds of faces staring at them looked like pale lanterns in the flickering candlelight. Dotted here and there among the students, the ghosts shone misty silver. Mainly to avoid all the staring eyes, Harry looked upwards and saw a velvety black ceiling dotted with stars. He heard Hermione whisper, ‘It’s bewitched to look like the sky outside, I read about it in Hogwarts: A History.’</p>
    <p>It was hard to believe there was a ceiling there at all, and that the Great Hall didn’t simply open on to the heavens.</p>

</div>
<div>


    <?php foreach($wands as $key => $value){?>
        <img src="<?php if($key != 'description') { echo $value['imagePath'];}?>" alt="wand"/>
    <?php }?>


    <?php foreach($brooms as $key => $value){?>
        <img src="<?php if($key != 'description') { echo $value['imagePath'];}?>" alt="wand"/>
    <?php }?>

    <?php foreach($books as $key => $value){?>
        <img src="<?php if($key != 'description') { echo $value['imagePath'];}?>" alt="wand"/>
    <?php }?>
</div>

<?php

$bottom_view = BOTTOM_VIEW_PATH;
require("$bottom_view");
?>
