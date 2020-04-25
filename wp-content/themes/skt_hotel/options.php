<?php     

/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 */ 

function optionsframework_option_name() {
	// Change this to use your theme slug
	$themename = wp_get_theme();
	$themename = preg_replace("/\W/", "_", strtolower($themename) );	
	return $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'skt-hotel'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {
	//array of all custom font types.
	$font_types = array(  '' => '',
		'ABeeZee' => 'ABeeZee',
		'Abel' => 'Abel',
		'Abril Fatface' => 'Abril Fatface',
		'Aclonica' => 'Aclonica',
		'Acme' => 'Acme',
		'Actor' => 'Actor',
		'Adamina' => 'Adamina',
		'Advent Pro' => 'Advent Pro',
		'Aguafina Script' => 'Aguafina Script',
		'Akronim' => 'Akronim',
		'Aladin' => 'Aladin',
		'Aldrich' => 'Aldrich',
		'Alegreya' => 'Alegreya',
		'Alegreya Sans SC' => 'Alegreya Sans SC',
		'Alegreya SC' => 'Alegreya SC',
		'Alex Brush' => 'Alex Brush',
		'Alef' => 'Alef',
		'Alfa Slab One' => 'Alfa Slab One',
		'Alice' => 'Alice',
		'Alike' => 'Alike',
		'Alike Angular' => 'Alike Angular',
		'Allan' => 'Allan',
		'Allerta' => 'Allerta',
		'Allerta Stencil' => 'Allerta Stencil',
		'Allura' => 'Allura',
		'Almendra' => 'Almendra',
		'Almendra Display' => 'Almendra Display',
		'Almendra SC' => 'Almendra SC',
		'Amiri' => 'Amiri',
		'Amarante' => 'Amarante',
		'Amaranth' => 'Amaranth',
		'Amatic SC' => 'Amatic SC',
		'Amethysta' => 'Amethysta',
		'Amita' => 'Amita',
		'Anaheim' => 'Anaheim',
		'Andada' => 'Andada',
		'Andika' => 'Andika',
		'Annie Use Your Telescope' => 'Annie Use Your Telescope',
		'Anonymous Pro' => 'Anonymous Pro',
		'Antic' => 'Antic',
		'Antic Didone' => 'Antic Didone',
		'Antic Slab' => 'Antic Slab',
		'Anton' => 'Anton',
		'Angkor' => 'Angkor',
		'Arapey' => 'Arapey',
		'Arbutus' => 'Arbutus',
		'Arbutus Slab' => 'Arbutus Slab',
		'Architects Daughter' => 'Architects Daughter',
		'Archivo White' => 'Archivo White',
		'Archivo Narrow' => 'Archivo Narrow',
		'Arial' => 'Arial',
		'Arimo' => 'Arimo',
		'Arya' => 'Arya',
		'Arizonia' => 'Arizonia',
		'Armata' => 'Armata',
		'Artifika' => 'Artifika',
		'Arvo' => 'Arvo',
		'Asar' => 'Asar',
		'Asap' => 'Asap',
		'Asset' => 'Asset',
		'Astloch' => 'Astloch',
		'Asul' => 'Asul',
		'Atomic Age' => 'Atomic Age',
		'Aubrey' => 'Aubrey',
		'Audiowide' => 'Audiowide',
		'Autour One' => 'Autour One',
		'Average' => 'Average',
		'Average Sans' => 'Average Sans',
		'Averia Gruesa Libre' => 'Averia Gruesa Libre',
		'Averia Libre' => 'Averia Libre',
		'Averia Sans Libre' => 'Averia Sans Libre',
		'Averia Serif Libre' => 'Averia Serif Libre',
		'Battambang' => 'Battambang',
		'Bad Script' => 'Bad Script',
		'Bayon' => 'Bayon',
		'Balthazar' => 'Balthazar',
		'Bangers' => 'Bangers',
		'Basic' => 'Basic',
		'Baumans' => 'Baumans',
		'Belgrano' => 'Belgrano',
		'Belleza' => 'Belleza',
		'BenchNine' => 'BenchNine',
		'Bentham' => 'Bentham',
		'Berkshire Swash' => 'Berkshire Swash',
		'Bevan' => 'Bevan',
		'Bigelow Rules' => 'Bigelow Rules',
		'Bigshot One' => 'Bigshot One',
		'Bilbo' => 'Bilbo',
		'Bilbo Swash Caps' => 'Bilbo Swash Caps',
		'Biryani' => 'Biryani',
		'Bitter' => 'Bitter',
		'White Ops One' => 'White Ops One',
		'Bokor' => 'Bokor',
		'Bonbon' => 'Bonbon',
		'Boogaloo' => 'Boogaloo',
		'Bowlby One' => 'Bowlby One',
		'Bowlby One SC' => 'Bowlby One SC',
		'Brawler' => 'Brawler',
		'Bree Serif' => 'Bree Serif',
		'Bubblegum Sans' => 'Bubblegum Sans',
		'Bubbler One' => 'Bubbler One',
		'Buda' => 'Buda',
		'Buenard' => 'Buenard',
		'Butcherman' => 'Butcherman',
		'Butcherman Caps' => 'Butcherman Caps',
		'Butterfly Kids' => 'Butterfly Kids',
		'Cabin' => 'Cabin',
		'Cabin Condensed' => 'Cabin Condensed',
		'Cabin Sketch' => 'Cabin Sketch',
		'Cabin' => 'Cabin',
		'Caesar Dressing' => 'Caesar Dressing',
		'Cagliostro' => 'Cagliostro',
		'Calligraffitti' => 'Calligraffitti',
		'Cambay' => 'Cambay',
		'Cambo' => 'Cambo',
		'Candal' => 'Candal',
		'Cantarell' => 'Cantarell',
		'Cantata One' => 'Cantata One',
		'Cantora One' => 'Cantora One',
		'Capriola' => 'Capriola',
		'Cardo' => 'Cardo',
		'Carme' => 'Carme',
		'Carrois Gothic' => 'Carrois Gothic',
		'Carrois Gothic SC' => 'Carrois Gothic SC',
		'Carter One' => 'Carter One',
		'Caveat' => 'Caveat',
		'Caveat Brush' => 'Caveat Brush',
		'Catamaran' => 'Catamaran',
		'Caudex' => 'Caudex',
		'Cedarville Cursive' => 'Cedarville Cursive',
		'Ceviche One' => 'Ceviche One',
		'Changa One' => 'Changa One',
		'Chango' => 'Chango',
		'Chau Philomene One' => 'Chau Philomene One',
		'Chenla' => 'Chenla',
		'Chela One' => 'Chela One',
		'Chelsea Market' => 'Chelsea Market',
		'Cherry Cream Soda' => 'Cherry Cream Soda',
		'Cherry Swash' => 'Cherry Swash',
		'Chewy' => 'Chewy',
		'Chicle' => 'Chicle',
		'Chivo' => 'Chivo',
		'Chonburi' => 'Chonburi',
		'Cinzel' => 'Cinzel',
		'Cinzel Decorative' => 'Cinzel Decorative',
		'Clicker Script' => 'Clicker Script',
		'Coda' => 'Coda',
		'Codystar' => 'Codystar',
		'Combo' => 'Combo',
		'Comfortaa' => 'Comfortaa',
		'Coming Soon' => 'Coming Soon',
		'Condiment' => 'Condiment',
		'Content' => 'Content',
		'Contrail One' => 'Contrail One',
		'Convergence' => 'Convergence',
		'Cookie' => 'Cookie',
		'Comic Sans MS' => 'Comic Sans MS',
		'Copse' => 'Copse',
		'Corben' => 'Corben',
		'Courgette' => 'Courgette',
		'Cousine' => 'Cousine',
		'Coustard' => 'Coustard',
		'Covered By Your Grace' => 'Covered By Your Grace',
		'Crafty Girls' => 'Crafty Girls',
		'Creepster' => 'Creepster',
		'Creepster Caps' => 'Creepster Caps',
		'Crete Round' => 'Crete Round',
		'Crimson' => 'Crimson',
		'Croissant One' => 'Croissant One',
		'Crushed' => 'Crushed',
		'Cuprum' => 'Cuprum',
		'Cutive' => 'Cutive',
		'Cutive Mono' => 'Cutive Mono',
		'Damion' => 'Damion',
		'Dangrek' => 'Dangrek',
		'Dancing Script' => 'Dancing Script',
		'Dawning of a New Day' => 'Dawning of a New Day',
		'Days One' => 'Days One',
		'Dekko' => 'Dekko',
		'Delius' => 'Delius',
		'Delius Swash Caps' => 'Delius Swash Caps',
		'Delius Unicase' => 'Delius Unicase',
		'Della Respira' => 'Della Respira',
		'Denk One' => 'Denk One',
		'Devonshire' => 'Devonshire',
		'Dhurjati' => 'Dhurjati',
		'Didact Gothic' => 'Didact Gothic',
		'Diplomata' => 'Diplomata',
		'Diplomata SC' => 'Diplomata SC',
		'Domine' => 'Domine',
		'Donegal One' => 'Donegal One',
		'Doppio One' => 'Doppio One',
		'Dorsa' => 'Dorsa',
		'Dosis' => 'Dosis',
		'Dr Sugiyama' => 'Dr Sugiyama',
		'Droid Sans' => 'Droid Sans',
		'Droid Sans Mono' => 'Droid Sans Mono',
		'Droid Serif' => 'Droid Serif',
		'Duru Sans' => 'Duru Sans',
		'Dynalight' => 'Dynalight',
		'EB Garamond' => 'EB Garamond',
		'Eczar' => 'Eczar',
		'Eagle Lake' => 'Eagle Lake',
		'Eater' => 'Eater',
		'Eater Caps' => 'Eater Caps',
		'Economica' => 'Economica',
		'Ek Mukta' => 'Ek Mukta',
		'Electrolize' => 'Electrolize',
		'Elsie' => 'Elsie',
		'Elsie Swash Caps' => 'Elsie Swash Caps',
		'Emblema One' => 'Emblema One',
		'Emilys Candy' => 'Emilys Candy',
		'Engagement' => 'Engagement',
		'Englebert' => 'Englebert',
		'Enriqueta' => 'Enriqueta',
		'Erica One' => 'Erica One',
		'Esteban' => 'Esteban',
		'Euphoria Script' => 'Euphoria Script',
		'Ewert' => 'Ewert',
		'Exo' => 'Exo',
		'Exo 2' => 'Exo 2',
		'Expletus Sans' => 'Expletus Sans',
		'Fanwood Text' => 'Fanwood Text',
		'Fascinate' => 'Fascinate',
		'Fascinate Inline' => 'Fascinate Inline',
		'Fasthand' => 'Fasthand',
		'Faster One' => 'Faster One',
		'Federant' => 'Federant',
		'Federo' => 'Federo',
		'Felipa' => 'Felipa',
		'Fenix' => 'Fenix',
		'Finger Paint' => 'Finger Paint',
		'Fira Mono' => 'Fira Mono',
		'Fira Sans' => 'Fira Sans',
		'Fjalla One' => 'Fjalla One',
		'Fjord One' => 'Fjord One',
		'Flamenco' => 'Flamenco',
		'Flavors' => 'Flavors',
		'Fondamento' => 'Fondamento',
		'Fontdiner Swanky' => 'Fontdiner Swanky',
		'Forum' => 'Forum',
		'Francois One' => 'Francois One',
		'FreeSans' => 'FreeSans',
		'Freckle Face' => 'Freckle Face',
		'Fredericka the Great' => 'Fredericka the Great',
		'Fredoka One' => 'Fredoka One',
		'Fresca' => 'Fresca',
		'Freehand' => 'Freehand',
		'Frijole' => 'Frijole',
		'Fruktur' => 'Fruktur',
		'Fugaz One' => 'Fugaz One',
		'Gafata' => 'Gafata',
		'Galdeano' => 'Galdeano',
		'Galindo' => 'Galindo',
		'Gentium Basic' => 'Gentium Basic',
		'Gentium Book Basic' => 'Gentium Book Basic',
		'Geo' => 'Geo',
		'Georgia' => 'Georgia',
		'Geostar' => 'Geostar',


		'Geostar Fill' => 'Geostar Fill',
		'Germania One' => 'Germania One',
		'Gilda Display' => 'Gilda Display',
		'Give You Glory' => 'Give You Glory',
		'Glass Antiqua' => 'Glass Antiqua',
		'Glegoo' => 'Glegoo',
		'Gloria Hallelujah' => 'Gloria Hallelujah',
		'Goblin One' => 'Goblin One',
		'Gochi Hand' => 'Gochi Hand',
		'Gorditas' => 'Gorditas',
		'Gurajada' => 'Gurajada',
		'Goudy Bookletter 1911' => 'Goudy Bookletter 1911',
		'Graduate' => 'Graduate',
		'Grand Hotel' => 'Grand Hotel',
		'Gravitas One' => 'Gravitas One',
		'Great Vibes' => 'Great Vibes',
		'Griffy' => 'Griffy',
		'Gruppo' => 'Gruppo',
		'Gudea' => 'Gudea',
		'Gidugu' => 'Gidugu',
		'GFS Didot' => 'GFS Didot',
		'GFS Neohellenic' => 'GFS Neohellenic',
		'Habibi' => 'Habibi',
		'Hammersmith One' => 'Hammersmith One',
		'Halant' => 'Halant',
		'Hanalei' => 'Hanalei',
		'Hanalei Fill' => 'Hanalei Fill',
		'Handlee' => 'Handlee',
		'Hanuman' => 'Hanuman',
		'Happy Monkey' => 'Happy Monkey',
		'Headland One' => 'Headland One',
		'Henny Penny' => 'Henny Penny',
		'Herr Von Muellerhoff' => 'Herr Von Muellerhoff',
		'Hind' => 'Hind',
		'Hind Siliguri' => 'Hind Siliguri',
		'Hind Vadodara' => 'Hind Vadodara',
		'Holtwood One SC' => 'Holtwood One SC',
		'Homemade Apple' => 'Homemade Apple',
		'Homenaje' => 'Homenaje',
		'IM Fell' => 'IM Fell',
		'Itim' => 'Itim',
		'Iceberg' => 'Iceberg',
		'Iceland' => 'Iceland',
		'Imprima' => 'Imprima',
		'Inconsolata' => 'Inconsolata',
		'Inder' => 'Inder',
		'Indie Flower' => 'Indie Flower',
		'Inknut Antiqua' => 'Inknut Antiqua',
		'Inika' => 'Inika',
		'Irish Growler' => 'Irish Growler',
		'Istok Web' => 'Istok Web',
		'Italiana' => 'Italiana',
		'Italianno' => 'Italianno',
		'Jacques Francois' => 'Jacques Francois',
		'Jacques Francois Shadow' => 'Jacques Francois Shadow',
		'Jim Nightshade' => 'Jim Nightshade',
		'Jockey One' => 'Jockey One',
		'Jaldi' => 'Jaldi',
		'Jolly Lodger' => 'Jolly Lodger',
		'Josefin Sans' => 'Josefin Sans',
		'Josefin Sans' => 'Josefin Sans',
		'Josefin Slab' => 'Josefin Slab',
		'Joti One' => 'Joti One',
		'Judson' => 'Judson',
		'Julee' => 'Julee',
		'Julius Sans One' => 'Julius Sans One',
		'Junge' => 'Junge',
		'Jura' => 'Jura',
		'Just Another Hand' => 'Just Another Hand',
		'Just Me Again Down Here' => 'Just Me Again Down Here',
		'Kadwa' => 'Kadwa',
		'Kdam Thmor' => 'Kdam Thmor',
		'Kalam' => 'Kalam', 
		'Kameron' => 'Kameron',
		'Kantumruy' => 'Kantumruy',
		'Karma' => 'Karma',
		'Karla' => 'Karla',
		'Kaushan Script' => 'Kaushan Script',
		'Kavoon' => 'Kavoon',
		'Keania One' => 'Keania One',
		'Kelly Slab' => 'Kelly Slab',
		'Kenia' => 'Kenia',
		'Khand' => 'Khand',
		'Khmer' => 'Khmer',
		'Khula' => 'Khula',
		'Kite One' => 'Kite One',
		'Knewave' => 'Knewave',
		'Kotta One' => 'Kotta One',
		'Kranky' => 'Kranky',
		'Kreon' => 'Kreon',
		'Kristi' => 'Kristi',
		'Koulen' => 'Koulen',
		'Krona One' => 'Krona One',
		'Kurale' => 'Kurale',
		'Lakki Reddy' => 'Lakki Reddy',
		'La Belle Aurore' => 'La Belle Aurore',
		'Lancelot' => 'Lancelot',
		'Laila' => 'Laila',
		'Lato' => 'Lato',
		'Lateef' => 'Lateef',
		'League Script' => 'League Script',
		'Leckerli One' => 'Leckerli One',
		'Ledger' => 'Ledger',
		'Lekton' => 'Lekton',
		'Lemon' => 'Lemon',
		'Libre Baskerville' => 'Libre Baskerville',
		'Life Savers' => 'Life Savers',
		'Lilita One' => 'Lilita One',
		'Limelight' => 'Limelight',
		'Linden Hill' => 'Linden Hill',
		'Lobster' => 'Lobster',
		'Lobster Two' => 'Lobster Two',
		'Londrina Outline' => 'Londrina Outline',
		'Londrina Shadow' => 'Londrina Shadow',
		'Londrina Sketch' => 'Londrina Sketch',
		'Londrina Solid' => 'Londrina Solid',
		'Lora' => 'Lora',
		'Love Ya Like A Sister' => 'Love Ya Like A Sister',
		'Loved by the King' => 'Loved by the King',
		'Lovers Quarrel' => 'Lovers Quarrel',
		'Lucida Sans Unicode' => 'Lucida Sans Unicode',
		'Luckiest Guy' => 'Luckiest Guy',
		'Lusitana' => 'Lusitana',
		'Lustria' => 'Lustria',
		'Macondo' => 'Macondo',
		'Macondo Swash Caps' => 'Macondo Swash Caps',
		'Magra' => 'Magra',
		'Maiden Orange' => 'Maiden Orange',
		'Mallanna' => 'Mallanna',
		'Mandali' => 'Mandali',
		'Mako' => 'Mako',
		'Marcellus' => 'Marcellus',
		'Marcellus SC' => 'Marcellus SC',
		'Marck Script' => 'Marck Script',
		'Margarine' => 'Margarine',
		'Marko One' => 'Marko One',
		'Marmelad' => 'Marmelad',
		'Marvel' => 'Marvel',
		'Martel' => 'Martel',
		'Martel Sans' => 'Martel Sans',
		'Mate' => 'Mate',
		'Mate SC' => 'Mate SC',
		'Maven Pro' => 'Maven Pro',
		'McLaren' => 'McLaren',
		'Meddon' => 'Meddon',
		'MedievalSharp' => 'MedievalSharp',
		'Medula One' => 'Medula One',
		'Megrim' => 'Megrim',
		'Meie Script' => 'Meie Script',
		'Merienda' => 'Merienda',
		'Merienda One' => 'Merienda One',
		'Merriweather' => 'Merriweather',
		'Metal' => 'Metal',
		'Metal Mania' => 'Metal Mania',
		'Metamorphous' => 'Metamorphous',
		'Metrophobic' => 'Metrophobic',
		'Michroma' => 'Michroma',
		'Milonga' => 'Milonga',
		'Miltonian' => 'Miltonian',
		'Miltonian Tattoo' => 'Miltonian Tattoo',
		'Miniver' => 'Miniver',
		'Miss Fajardose' => 'Miss Fajardose',
		'Miss Saint Delafield' => 'Miss Saint Delafield',
		'Modak' => 'Modak',
		'Modern Antiqua' => 'Modern Antiqua',
		'Molengo' => 'Molengo',
		'Molle' => 'Molle',
		'Moulpali' => 'Moulpali',
		'Monda' => 'Monda',
		'Monofett' => 'Monofett',
		'Monoton' => 'Monoton',
		'Monsieur La Doulaise' => 'Monsieur La Doulaise',
		'Montaga' => 'Montaga',
		'Montez' => 'Montez',
		'Montserrat' => 'Montserrat',
		'Montserrat Alternates' => 'Montserrat Alternates',
		'Montserrat Subrayada' => 'Montserrat Subrayada',
		'Mountains of Christmas' => 'Mountains of Christmas',
		'Mouse Memoirs' => 'Mouse Memoirs',
		'Moul' => 'Moul',
		'Mr Bedford' => 'Mr Bedford',
		'Mr Bedfort' => 'Mr Bedfort',
		'Mr Dafoe' => 'Mr Dafoe',
		'Mr De Haviland' => 'Mr De Haviland',
		'Mrs Saint Delafield' => 'Mrs Saint Delafield',
		'Mrs Sheppards' => 'Mrs Sheppards',
		'Muli' => 'Muli',
		'Mystery Quest' => 'Mystery Quest',
		'Neucha' => 'Neucha',
		'Neuton' => 'Neuton',
		'New Rocker' => 'New Rocker',
		'News Cycle' => 'News Cycle',
		'Niconne' => 'Niconne',
		'Nixie One' => 'Nixie One',
		'Nobile' => 'Nobile',
		'Nokora' => 'Nokora',
		'Norican' => 'Norican',
		'Nosifer' => 'Nosifer',
		'Nosifer Caps' => 'Nosifer Caps',
		'Nova Mono' => 'Nova Mono',
		'Noticia Text' => 'Noticia Text',
		'Noto Sans' => 'Noto Sans',
		'Noto Serif' => 'Noto Serif',
		'Nova Round' => 'Nova Round',
		'Numans' => 'Numans',
		'Nunito' => 'Nunito',
		'NTR' => 'NTR',
		'Offside' => 'Offside',
		'Oldenburg' => 'Oldenburg',
		'Oleo Script' => 'Oleo Script',
		'Oleo Script Swash Caps' => 'Oleo Script Swash Caps',
		'Open Sans' => 'Open Sans',
		'Open Sans Condensed' => 'Open Sans Condensed',
		'Oranienbaum' => 'Oranienbaum',
		'Orbitron' => 'Orbitron',
		'Odor Mean Chey' => 'Odor Mean Chey',
		'Oregano' => 'Oregano',
		'Orienta' => 'Orienta',
		'Original Surfer' => 'Original Surfer',
		'Oswald' => 'Oswald',
		'Over the Rainbow' => 'Over the Rainbow',
		'Overlock' => 'Overlock',
		'Overlock SC' => 'Overlock SC',
		'Ovo' => 'Ovo',
		'Oxygen' => 'Oxygen',
		'Oxygen Mono' => 'Oxygen Mono',
		'Palanquin Dark' => 'Palanquin Dark',
		'Peddana' => 'Peddana',
		'Poppins' => 'Poppins',
		'PT Mono' => 'PT Mono',
		'PT Sans' => 'PT Sans',
		'PT Sans Caption' => 'PT Sans Caption',
		'PT Sans Narrow' => 'PT Sans Narrow',
		'PT Serif' => 'PT Serif',
		'PT Serif Caption' => 'PT Serif Caption',
		'Pacifico' => 'Pacifico',
		'Paprika' => 'Paprika',
		'Parisienne' => 'Parisienne',
		'Passero One' => 'Passero One',
		'Passion One' => 'Passion One',
		'Patrick Hand' => 'Patrick Hand',
		'Patrick Hand SC' => 'Patrick Hand SC',
		'Patua One' => 'Patua One',
		'Paytone One' => 'Paytone One',
		'Peralta' => 'Peralta',
		'Permanent Marker' => 'Permanent Marker',
		'Petit Formal Script' => 'Petit Formal Script',
		'Petrona' => 'Petrona',
		'Philosopher' => 'Philosopher',
		'Piedra' => 'Piedra',
		'Pinyon Script' => 'Pinyon Script',
		'Pirata One' => 'Pirata One',
		'Plaster' => 'Plaster',
		'Palatino Linotype' => 'Palatino Linotype',
		'Play' => 'Play',
		'Playball' => 'Playball',
		'Playfair Display' => 'Playfair Display',
		'Playfair Display SC' => 'Playfair Display SC',
		'Podkova' => 'Podkova',
		'Poiret One' => 'Poiret One',
		'Poller One' => 'Poller One',
		'Poly' => 'Poly',
		'Pompiere' => 'Pompiere',
		'Pontano Sans' => 'Pontano Sans',
		'Port Lligat Sans' => 'Port Lligat Sans',
		'Port Lligat Slab' => 'Port Lligat Slab',
		'Prata' => 'Prata',
		'Pragati Narrow' => 'Pragati Narrow',
		'Preahvihear' => 'Preahvihear',
		'Press Start 2P' => 'Press Start 2P',
		'Princess Sofia' => 'Princess Sofia',
		'Prociono' => 'Prociono',
		'Prosto One' => 'Prosto One',
		'Puritan' => 'Puritan',
		'Purple Purse' => 'Purple Purse',
		'Quando' => 'Quando',
		'Quantico' => 'Quantico',
		'Quattrocento' => 'Quattrocento',
		'Quattrocento Sans' => 'Quattrocento Sans',
		'Questrial' => 'Questrial',
		'Quicksand' => 'Quicksand',
		'Quintessential' => 'Quintessential',
		'Qwigley' => 'Qwigley',
		'Racing Sans One' => 'Racing Sans One',
		'Radley' => 'Radley',
		'Rajdhani' => 'Rajdhani',
		'Raleway Dots' => 'Raleway Dots',
		'Raleway' => 'Raleway',
		'Rambla' => 'Rambla',
		'Ramabhadra' => 'Ramabhadra',
		'Ramaraja' => 'Ramaraja',
		'Rammetto One' => 'Rammetto One',
		'Ranchers' => 'Ranchers',
		'Rancho' => 'Rancho',
		'Ranga' => 'Ranga',
		'Ravi Prakash' => 'Ravi Prakash',
		'Rationale' => 'Rationale',
		'Redressed' => 'Redressed',
		'Reenie Beanie' => 'Reenie Beanie',
		'Revalia' => 'Revalia',
		'Rhodium Libre' => 'Rhodium Libre',
		'Ribeye' => 'Ribeye',
		'Ribeye Marrow' => 'Ribeye Marrow',
		'Righteous' => 'Righteous',
		'Risque' => 'Risque',
		'Roboto' => 'Roboto',
		'Roboto Condensed' => 'Roboto Condensed',
		'Roboto Mono' => 'Roboto Mono',
		'Roboto Slab' => 'Roboto Slab',
		'Rochester' => 'Rochester',
		'Rock Salt' => 'Rock Salt',
		'Rokkitt' => 'Rokkitt',
		'Romanesco' => 'Romanesco',
		'Ropa Sans' => 'Ropa Sans',
		'Rosario' => 'Rosario',
		'Rosarivo' => 'Rosarivo',
		'Rouge Script' => 'Rouge Script',
		'Rozha One' => 'Rozha One',
		'Rubik' => 'Rubik',
		'Rubik One' => 'Rubik One',
		'Rubik Mono One' => 'Rubik Mono One',
		'Ruda' => 'Ruda',
		'Rufina' => 'Rufina',
		'Ruge Boogie' => 'Ruge Boogie',
		'Ruluko' => 'Ruluko',
		'Rum Raisin' => 'Rum Raisin',
		'Ruslan Display' => 'Ruslan Display',
		'Russo One' => 'Russo One',
		'Ruthie' => 'Ruthie',
		'Rye' => 'Rye',
		'Sacramento' => 'Sacramento',
		'Sail' => 'Sail',
		'Salsa' => 'Salsa',
		'Sanchez' => 'Sanchez',
		'Sancreek' => 'Sancreek',
		'Sahitya' => 'Sahitya',
		'Sansita One' => 'Sansita One',
		'Sarpanch' => 'Sarpanch',
		'Sarina' => 'Sarina',
		'Satisfy' => 'Satisfy',
		'Scada' => 'Scada',
		'Scheherazade' => 'Scheherazade',
		'Schoolbell' => 'Schoolbell',
		'Seaweed Script' => 'Seaweed Script',
		'Sarala' => 'Sarala',
		'Sevillana' => 'Sevillana',
		'Seymour One' => 'Seymour One',
		'Shadows Into Light' => 'Shadows Into Light',
		'Shadows Into Light Two' => 'Shadows Into Light Two',
		'Shanti' => 'Shanti',
		'Share' => 'Share',
		'Share Tech' => 'Share Tech',
		'Share Tech Mono' => 'Share Tech Mono',
		'Shojumaru' => 'Shojumaru',
		'Short Stack' => 'Short Stack',
		'Sigmar One' => 'Sigmar One',
		'Suranna' => 'Suranna',
		'Suravaram' => 'Suravaram',
		'Suwannaphum' => 'Suwannaphum',
		'Signika' => 'Signika',
		'Signika Negative' => 'Signika Negative',
		'Simonetta' => 'Simonetta',
		'Siemreap' => 'Siemreap',
		'Sirin Stencil' => 'Sirin Stencil',
		'Six Caps' => 'Six Caps',
		'Skranji' => 'Skranji',
		'Slackey' => 'Slackey',
		'Smokum' => 'Smokum',
		'Smythe' => 'Smythe',
		'Sniglet' => 'Sniglet',
		'Snippet' => 'Snippet',
		'Snowburst One' => 'Snowburst One',
		'Sofadi One' => 'Sofadi One',
		'Sofia' => 'Sofia',
		'Sonsie One' => 'Sonsie One',
		'Sorts Mill Goudy' => 'Sorts Mill Goudy',
		'Sorts Mill Goudy' => 'Sorts Mill Goudy',
		'Source Code Pro' => 'Source Code Pro',
		'Source Sans Pro' => 'Source Sans Pro',
		'Special I am one' => 'Special I am one',
		'Spicy Rice' => 'Spicy Rice',
		'Spinnaker' => 'Spinnaker',
		'Spirax' => 'Spirax',
		'Squada One' => 'Squada One',
		'Sree Krushnadevaraya' => 'Sree Krushnadevaraya',
		'Stalemate' => 'Stalemate',
		'Stalinist One' => 'Stalinist One',
		'Stardos Stencil' => 'Stardos Stencil',
		'Stint Ultra Condensed' => 'Stint Ultra Condensed',
		'Stint Ultra Expanded' => 'Stint Ultra Expanded',
		'Stoke' => 'Stoke',
		'Stoke' => 'Stoke',
		'Strait' => 'Strait',
		'Sura' => 'Sura',
		'Sumana' => 'Sumana',
		'Sue Ellen Francisco' => 'Sue Ellen Francisco',
		'Sunshiney' => 'Sunshiney',
		'Supermercado One' => 'Supermercado One',
		'Swanky and Moo Moo' => 'Swanky and Moo Moo',
		'Syncopate' => 'Syncopate',
		'Symbol' => 'Symbol',
		'Timmana' => 'Timmana',
		'Taprom' => 'Taprom',
		'Tangerine' => 'Tangerine',
		'Tahoma' => 'Tahoma',
		'Teko' => 'Teko',
		'Telex' => 'Telex',
		'Tenali Ramakrishna' => 'Tenali Ramakrishna',
		'Tenor Sans' => 'Tenor Sans',
		'Terminal Dosis' => 'Terminal Dosis',
		'Terminal Dosis Light' => 'Terminal Dosis Light',
		'Text Me One' => 'Text Me One',
		'The Girl Next Door' => 'The Girl Next Door',
		'Tienne' => 'Tienne',
		'Tillana' => 'Tillana',
		'Tinos' => 'Tinos',
		'Titan One' => 'Titan One',
		'Titillium Web' => 'Titillium Web',
		'Trade Winds' => 'Trade Winds',
		'Trebuchet MS' => 'Trebuchet MS',
		'Trocchi' => 'Trocchi',
		'Trochut' => 'Trochut',
		'Trykker' => 'Trykker',
		'Tulpen One' => 'Tulpen One',
		'Ubuntu' => 'Ubuntu',
		'Ubuntu Condensed' => 'Ubuntu Condensed',
		'Ubuntu Mono' => 'Ubuntu Mono',
		'Ultra' => 'Ultra',
		'Uncial Antiqua' => 'Uncial Antiqua',
		'Underdog' => 'Underdog',
		'Unica One' => 'Unica One',
		'UnifrakturCook' => 'UnifrakturCook',
		'UnifrakturMaguntia' => 'UnifrakturMaguntia',
		'Unkempt' => 'Unkempt',
		'Unlock' => 'Unlock',
		'Unna' => 'Unna',
		'VT323' => 'VT323',
		'Vampiro One' => 'Vampiro One',
		'Varela' => 'Varela',
		'Varela Round' => 'Varela Round',
		'Vast Shadow' => 'Vast Shadow',
		'Vesper Libre' => 'Vesper Libre',
		'Verdana' => 'Verdana',
		'Vibur' => 'Vibur',
		'Vidaloka' => 'Vidaloka',
		'Viga' => 'Viga',
		'Voces' => 'Voces',
		'Volkhov' => 'Volkhov',
		'Vollkorn' => 'Vollkorn',
		'Voltaire' => 'Voltaire',
		'Waiting for the Sunrise' => 'Waiting for the Sunrise',
		'Wallpoet' => 'Wallpoet',
		'Walter Turncoat' => 'Walter Turncoat',
		'Warnes' => 'Warnes',
		'Wellfleet' => 'Wellfleet',
		'Wendy One' => 'Wendy One',
		'Wire One' => 'Wire One',
		'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
		'Yantramanav' => 'Yantramanav',
		'Yellowtail' => 'Yellowtail',
		'Yeseva One' => 'Yeseva One',
		'Yesteryear' => 'Yesteryear',
		'Zeyada' => 'Zeyada'
	);

	//array of all font sizes.
	$font_sizes = array( 
		'10px' => '10px',
		'11px' => '11px',
	);
	for($n=12;$n<=100;$n++){
		$font_sizes[$n.'px'] = $n.'px';
	}
	

	define(SKT_THEME_URL,'http://sktthemes.net/');

	// array of section content.
	$section_text = array(
		1 => array(
			'section_title'	=> 'Check Our Comfortable Rooms',
			'bgcolor' 		=> '#f9f9f9',
			'bgimage'		=> '',
			'class'			=> 'our-rooms',
			'content'		=> 'Praesent vitae odio eget felis vehicula vulputate sit amet ut tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus muscular. [space height="10"][column_content type="one_third"]
	<a href="#"><img src="'.get_template_directory_uri()."/images/thumb_01.jpg".'" alt="">
	<h4>Room with One Bedroom</h4></a>
[/column_content]

[column_content type="one_third"]
	<a href="#"><img src="'.get_template_directory_uri()."/images/thumb_04.jpg".'" alt="">
	<h4>Family Spacious Room</h4></a>
[/column_content]

[column_content type="one_third_last"]
	<a href="#"><img src="'.get_template_directory_uri()."/images/thumb_05.jpg".'" alt="">
	<h4>2 Rooms Appartment</h4></a>
[/column_content]'
		),		
		2 => array(
			'section_title'	=> '',
			'bgcolor' 		=> '#ffffff',
			'bgimage'		=> '',
			'class'			=> 'about-wrap',
			'content'		=> '[column_content type="aboutpart"]	
	<h3>About <span>Hotel</span></h3>
	[area class="ofr" width="30%"]<img src="'.get_template_directory_uri()."/images/thumb_02.jpg".'" alt="">[/area]Suspendisse rutrum tincidunt augue sit amet adipiscing. Aliquam ut nullrs. Curabitur interdum, erat quis sodales facilisis, massa arcu varius scelerisque nibh mauris vitae augue. Cras at egestas sem. Nullam faucibus, nisi  vehicula blandit, odio orci tincidunt urna.	
<ul>
<li>Check-in: 02:00 P.M.; Check-out: 12:00 A.M.</li>
<li>Free High Speed Wi-Fi Internet in Every Room</li>
<li>In Room Dining Available from 06:00 P.M. to 10:30 P.M.</li>
<li>Free Local Self Parking Available</li>
</ul>
<a class="read-more" href="">Online Reservations <i class="fa fa-angle-right mideum"></i></a>
[/column_content]

[column_content type="servicespart"]
<h3>Our <span>Services</span></h3>
<ul>
<li><a href="#">Bed and Breakfast</a></li>
<li><a href="#">Sight Seeing</a></li>
<li><a href="#">Cab Facility</a></li>
<li><a href="#">Morning Tea</a></li>
<li><a href="#">Free Internet</a></li>
<li><a href="#">Business Center</a></li>
</ul>
[/column_content]'
		),		
		3 => array(
			'section_title'	=> '',
			'bgcolor' 		=> '#f2efeb',
			'bgimage'		=> get_template_directory_uri()."/images/newsbg.jpg",
			'class'			=> 'news-events-wrap',
			'content'		=> '[column_content type="one_third"]
			<h3>Latest <span>News</span></h3>
			[area class="hold-3box"][recentposts show="3"][/area][/column_content]

[column_content type="one_third"]
<h3>Upcoming <span>Events</span></h3>
[area class="hold-3box"][events link="#" date="<span>15</span>June" title="Maecenas quis nisl quis"]Lorem ipsum dolor sit ame turndn adipising elit. Integer ame...[/events][events link="#" date="<span>15</span> June" title="Maecenas quis nisl quis"]Lorem ipsum dolor sit ame turndn adipising elit. teger dolor...[/events][events link="#" date="<span>15</span> June" title="Maecenas quis nisl quis"]Lorem ipsum dolor sit ame turndn adipising elit. Integer imperd...[/events][/area][/column_content]

[column_content type="one_third_last"]
<h3>Latest <span>Cuisines</span></h3>
[area class="hold-3box"]
<ul class="list-cuisines">
	<li><a href="#">molestie augue</a></li>
	<li><a href="#">sagittis commodo mauris</a></li>
	<li><a href="#">Pellentesque sollicitudin</a></li>
	<li><a href="#">Maecenas vestibulum</a></li>
	<li><a href="#">Phasellus semper commodo</a></li>
	<li><a href="#">Quisque fringilla massa</a></li>
	<li><a href="#">porttitor lacus</a></li>
</ul>
[/area][/column_content]'
		),		
		4 => array(
			'section_title'	=> '',
			'bgcolor' 		=> '#ffffff',
			'bgimage'		=> '',
			'class'			=> 'offer-wrap',
			'content'		=> '[column_content type="aboutpart"]	
	<h3>special <span>Offers</span></h3>
	[area class="ofr" width="30%"]<img src="'.get_template_directory_uri()."/images/thumb_03.jpg".'" alt="">[/area]Suspendisse rutrum tincidunt augue sit amet adipiscing. Aliquam ut nulla risus. Curabitur interdum, erat quis sodales facilisis, massa arcu varius arcu, eu scelerisque nibh mauris vitae augue. Cras at egestas sem. Nullam faucibus, nisi quis vehicula blandit.
	[blankspace height="5"]	
<a class="read-more" href="">Read More</a>
[/column_content]
[column_content type="servicespart"][toggle_content title="Check In"]
	From 13:00 hours
[/toggle_content][toggle_content title="Check out"]
	From 18:00 hours
[/toggle_content][toggle_content title="Cancellation / Prepayment"]
	Suspendisse rutrum tincidunt augue sit amet adipiscing. Aliquam ut nulla risus. Curabitur interdum, erat quis sodales facilisis.
[/toggle_content]
[/column_content]
'
		),			
		5 => array(
			'section_title'	=> 'Client Testimonials',
			'bgcolor' 		=> '#f6f5f4',
			'bgimage'		=> get_template_directory_uri()."/images/newsbg.jpg",
			'class'			=> 'testimonials-wrap',
			'content'		=> '[testimonials]'
		),		
		6 => array(
			'section_title'	=> 'Our Gallery',
			'bgcolor' 		=> '#ffffff',
			'bgimage'		=> '',
			'class'			=> 'gallery-wrap',
			'content'		=> '
			[separator height="20"]
			[portfolio cat="Rotator"]		
			<center>
				<a class="read-more" href="'.get_bloginfo('url').'/gallery/">View Gallery <i class="fa fa-angle-right mideum"></i></a>
			</center>'
		),			
	);

	$options = array();

	//Basic Settings
	$options[] = array(
		'name' => __('Basic Settings', 'skt-hotel'),
		'type' => 'heading');
		
	$options[] = array(	
		'name' => __('Body', 'skt-hotel'),	
		'desc' => __('Select font family for the body text', 'skt-hotel'),
		'id' => 'bodyfontface',
		'type' => 'select',
		'std' => 'Arimo',
		'options' => $font_types );		
		
	$options[] = array(		
		'desc' => __('Select body font size for body text', 'skt-hotel'),
		'id' => 'bodyfontsize',
		'std' => '13px',
		'type' => 'select',
		'options' => $font_sizes);	

	$options[] = array(		
		'desc' => __('Select font color for the body text', 'skt-hotel'),
		'id' => 'bodyfontcolor',
		'std' => '#3c3c3c',
		'type' => 'color');	
		
		
	$options[] = array(
		'name' => __('Header Background Color', 'skt-hotel'),
		'desc' => __('Select background color for header', 'skt-hotel'),
		'id' => 'headerbgcolor',
		'std' => '#1f1f1f',
		'type' => 'color');			

	$options[] = array(
		'name' => __('Logo', 'skt-hotel'),
		'desc' => __('Upload your main logo here', 'skt-hotel'),
		'id' => 'logo',
		'class' => '',
		'std'	=> get_template_directory_uri()."/images/logo.png",
		'type' => 'upload');
		

	$options[] = array(
		'name' => __('Logo Height', 'skt-hotel'),
		'desc' => __('If your logo is large, you can increase this number to allow for more height.', 'skt-hotel'),
		'id' => 'logoheight',
		'std' => '112',
		'type' => 'text');

	$options[] = array(
		'name' => __('Header Mobile menu text', 'skt-hotel'),
		'desc' => __('Header header menu chenge text (Menu).', 'skt-hotel'),
		'id' => 'mobilemenuname',
		'std' => 'Menu',
		'type' => 'text');
		
		
	$options[] = array(
		'name' => __('Testimonial Slider Fade Timing', 'skt-hotel'),
		'desc' => __('Animation speed should be multiple of 100.', 'skt-hotel'),
		'id' => 'rotationtestimonials',
		'std' => 5000,
		'type' => 'text');
		
	$options[] = array(	
		'desc' => __('Select font family for logo', 'skt-hotel'),
		'id' => 'logofontface',
		'type' => 'select',
		'std' => 'Roboto Condensed',
		'options' => $font_types );		
	
	$options[] = array(	
		'desc' => __('Select font size for logo', 'skt-hotel'),
		'id' => 'logofontsize',
		'std' => '32px',
		'type' => 'select',
		'options' => $font_sizes);

	$options[] = array(		
		'desc' => __('Select font color for logo', 'skt-hotel'),
		'id' => 'logofontcolor',
		'std' => '#ffffff',
		'type' => 'color');	
		
	$options[] = array(	
		'desc' => __('Select font size for logo tagline', 'skt-hotel'),
		'id' => 'logotagfontsize',
		'std' => '12px',
		'type' => 'select',
		'options' => $font_sizes);

	$options[] = array(		
		'desc' => __('Select font color for logo tagline', 'skt-hotel'),
		'id' => 'logotagfontcolor',
		'std' => '#ffffff',
		'type' => 'color');	

	$options[] = array(
		'name' => __('Custom CSS', 'skt-hotel'),
		'desc' => __('Some Custom Styling for your site. Place any css codes here instead of the style.css file.', 'skt-hotel'),
		'id' => 'style2',
		'std' => '',
		'type' => 'textarea');

$options[] = array(
		'desc' => __('Blog post page change text content lenth here ', 'skt-hotel'),
		'id' => 'blogpostpagecontent',
		'std' => '40',
		'type' => 'text');			

	$options[] = array(
		'desc' => __('Change blog post page Read More chenge text (Read More).', 'skt-hotel'),
		'id' => 'readmoretext',
		'std' => 'Read More &rarr;',
		'type' => 'text');		


		
	$options[] = array(
		'name' => __('Book Now Text & Link', 'skt-hotel'),
		'desc' => __('book now button on the slider', 'skt-hotel'),
		'id' => 'booknowbutton',
		'std' => '<a href="#" target="_blank" class="bookbtn">Book <b>Now</b><span class="fa fa-chevron-right fa-1x"></span></a>',
		'type' => 'textarea');			
		
		
	$options[] = array(
		'name' => __('Header Navigation', 'skt-hotel'),
		'desc' => __('Select font family for the navigation', 'skt-hotel'),
		'id' => 'navfontface',
		'type' => 'select',
		'std' => 'Roboto Condensed',
		'options' => $font_types );
		
	$options[] = array(		
		'desc' => __('Select font size for navigation', 'skt-hotel'),
		'id' => 'navfontsize',
		'std' => '15px',
		'type' => 'select',
		'options' => $font_sizes);
		
	$options[] = array(		
		'desc' => __('Select font color for navigation', 'skt-hotel'),
		'id' => 'navfontcolor',
		'std' => '#ffffff',
		'type' => 'color');

	$options[] = array(		
		'desc' => __('Select font hover  color for navigation', 'skt-hotel'),
		'id' => 'navhovercolor',
		'std' => '#02aee7',
		'type' => 'color');		
		
	$options[] = array(	
		'name' => __('Navigation Dropdown css ', 'skt-hotel'),	
		'desc' => __('Select dropdown background color for navigation', 'skt-hotel'),
		'id' => 'dropdownbg',
		'std' => '#1f1f1f',
		'type' => 'color');	
		
	$options[] = array(		
		'desc' => __('Select dropdown border color for navigation', 'skt-hotel'),
		'id' => 'dropdownborder',
		'std' => '#ffffff',
		'type' => 'color');	
		
	$options[] = array(		
		'desc' => __('Select mobile menu border color', 'skt-hotel'),
		'id' => 'mobileborder',
		'std' => '#cccccc',
		'type' => 'color');	

	$options[] = array(
		'name' => __('Heading Tags', 'skt-hotel'),
		'desc' => __('Select font family for all heading tags. eg: H1, H2, H3, H4, H5, H6', 'skt-hotel'),
		'id' => 'headfontface',
		'type' => 'select',
		'std' => 'Roboto',
		'options' => $font_types );
		
	$options[] = array(
		'name' => __('Heading h1 Tag', 'skt-hotel'),
		'desc' => __('Select font family for the h1 heading', 'skt-hotel'),
		'id' => 'h1fontface',
		'type' => 'select',
		'std' => 'Roboto',
		'options' => $font_types );	
	
	$options[] = array(		
		'desc' => __('Select h1 font size', 'skt-hotel'),
		'id' => 'h1fontsize',
		'std' => '38px',
		'type' => 'select',
		'options' => $font_sizes);

	$options[] = array(		
		'desc' => __('Select h1 font color', 'skt-hotel'),
		'id' => 'h1fontcolor',
		'std' => '#2e2e2e',
		'type' => 'color');
		
	$options[] = array(
		'name' => __('Heading h2 Tag', 'skt-hotel'),
		'desc' => __('Select font family for the h2 heading', 'skt-hotel'),
		'id' => 'h2fontface',
		'type' => 'select',
		'std' => 'Roboto',
		'options' => $font_types );	
		
	$options[] = array(		
		'desc' => __('Select h2 font size', 'skt-hotel'),
		'id' => 'h2fontsize',
		'std' => '36px',
		'type' => 'select',
		'options' => $font_sizes);

	$options[] = array(		
		'desc' => __('Select h2 font color', 'skt-hotel'),
		'id' => 'h2fontcolor',
		'std' => '#454545',
		'type' => 'color');	
		
	$options[] = array(
		'name' => __('Heading h3 Tag', 'skt-hotel'),
		'desc' => __('Select font family for the h3 heading', 'skt-hotel'),
		'id' => 'h3fontface',
		'type' => 'select',
		'std' => 'Roboto',
		'options' => $font_types );	
		
	$options[] = array(		
		'desc' => __('Select h3 font size', 'skt-hotel'),
		'id' => 'h3fontsize',
		'std' => '28px',
		'type' => 'select',
		'options' => $font_sizes);

	$options[] = array(		
		'desc' => __('Select h3 font color', 'skt-hotel'),
		'id' => 'h3fontcolor',
		'std' => '#454545',
		'type' => 'color');	
		
	$options[] = array(
		'name' => __('Heading h4 Tag', 'skt-hotel'),
		'desc' => __('Select font family for the h4 heading', 'skt-hotel'),
		'id' => 'h4fontface',
		'type' => 'select',
		'std' => 'Roboto',
		'options' => $font_types );	
		
	$options[] = array(		
		'desc' => __('Select h4 font size', 'skt-hotel'),
		'id' => 'h4fontsize',
		'std' => '22px',
		'type' => 'select',
		'options' => $font_sizes);

	$options[] = array(		
		'desc' => __('Select h4 font color', 'skt-hotel'),
		'id' => 'h4fontcolor',
		'std' => '#313131',
		'type' => 'color');	
		
	$options[] = array(
		'name' => __('Heading h5 Tag', 'skt-hotel'),
		'desc' => __('Select font family for the h5 heading', 'skt-hotel'),
		'id' => 'h5fontface',
		'type' => 'select',
		'std' => 'Roboto',
		'options' => $font_types );	
		
	$options[] = array(		
		'desc' => __('Select h5 font size', 'skt-hotel'),
		'id' => 'h5fontsize',
		'std' => '18px',
		'type' => 'select',
		'options' => $font_sizes);

	$options[] = array(		
		'desc' => __('Select h5 font color', 'skt-hotel'),
		'id' => 'h5fontcolor',
		'std' => '#373737',
		'type' => 'color');	
		
	$options[] = array(
		'name' => __('Heading h6 Tag', 'skt-hotel'),
		'desc' => __('Select font family for the h6 heading', 'skt-hotel'),
		'id' => 'h6fontface',
		'type' => 'select',
		'std' => 'Roboto',
		'options' => $font_types );	
		
	$options[] = array(		
		'desc' => __('Select h6 font size', 'skt-hotel'),
		'id' => 'h6fontsize',
		'std' => '16px',
		'type' => 'select',
		'options' => $font_sizes);

	$options[] = array(		
		'desc' => __('Select h6 font color', 'skt-hotel'),
		'id' => 'h6fontcolor',
		'std' => '#373737',
		'type' => 'color');				

	$options[] = array(
		'name' => __('Anchor / Link Color', 'skt-hotel'),
		'desc' => __('Select font color for links / anchor tags', 'skt-hotel'),
		'id' => 'linkcolor',
		'std' => '#02abe5',
		'type' => 'color');

	$options[] = array(		
		'desc' => __('Select font color for links / anchor tags on hover', 'skt-hotel'),
		'id' => 'linkhovercolor',
		'std' => '#000000',
		'type' => 'color');
		
	$options[] = array(		
		'desc' => __('Select sidebar font color for links / anchor tags', 'skt-hotel'),
		'id' => 'sidebarlinkcolor',
		'std' => '#3f3f3f',
		'type' => 'color');	
		
	$options[] = array(		
		'desc' => __('Select sidebar font color for links / anchor tags on hover', 'skt-hotel'),
		'id' => 'sidebarlinkhover',
		'std' => '#02abe5',
		'type' => 'color');	
		
	
	$options[] = array(
		'name' => __('Slider Manageble Settings ', 'skt-hotel'),
		'desc' => __('Select font family for slider heading', 'skt-hotel'),
		'id' => 'slidefontface',
		'type' => 'select',
		'std' => 'Roboto',
		'options' => $font_types );	
		
	$options[] = array(		
		'desc' => __('Select font size for slider heading', 'skt-hotel'),
		'id' => 'slidefontsize',
		'std' => '34px',
		'type' => 'select',
		'options' => $font_sizes);	
		
	$options[] = array(		
		'desc' => __('Select background color for slider caption', 'skt-hotel'),
		'id' => 'slidercaption',
		'std' => '#333333',
		'type' => 'color');	
		
	$options[] = array(		
		'desc' => __('Select background color opacity for slider caption', 'skt-hotel'),
		'id' => 'slideropacity',
		'std' => '0.5',
		'type' => 'select',
		'options'	=> array('1'=>1, '0.9'=>0.9,'0.8'=>0.8,'0.7'=>0.7,'0.6'=>0.6,'0.5'=>0.5,'0.4'=>0.4,'0.3'=>0.3,'0.2'=>0.2,));		

	$options[] = array(		
		'desc' => __('Select font color for slider heading', 'skt-hotel'),
		'id' => 'slidefontcolor',
		'std' => '#ffffff',
		'type' => 'color');	
		
	$options[] = array(	
		'desc' => __('Select background color for slider pagination', 'skt-hotel'),
		'id' => 'slidernav',
		'std' => '#ffffff',
		'type' => 'color');	
		
	$options[] = array(		
		'desc' => __('Select background hover color for slider pagination', 'skt-hotel'),
		'id' => 'slidernavhover',
		'std' => '#1a1a1a',
		'type' => 'color');	
		
	$options[] = array(		
		'desc' => __('Select border color for slider pagination', 'skt-hotel'),
		'id' => 'slideborder',
		'std' => '#070707',
		'type' => 'color');	
		
	$options[] = array(	
		'name' => __('Book Now Button', 'skt-hotel'),	  		
		'desc' => __('Select background color for book now button', 'skt-hotel'),
		'id' => 'bookbtnbgcolor',
		'std' => '#02aee7',
		'type' => 'color');		
		
	$options[] = array(		
		'desc' => __('Select font family for book now button', 'skt-hotel'),
		'id' => 'bookbtnfontface',
		'type' => 'select',
		'std' => 'Roboto',
		'options' => $font_types );	
		
	$options[] = array(		
		'desc' => __('Select font size for book now button', 'skt-hotel'),
		'id' => 'bookbtnfontsize',
		'std' => '28px',
		'type' => 'select',
		'options' => $font_sizes);	
		
	$options[] = array(		
		'desc' => __('Select font color for book now button', 'skt-hotel'),
		'id' => 'bookbtnfontcolor',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(		
		'desc' => __('Select font hover color for book now button', 'skt-hotel'),
		'id' => 'bookbtnfonthover',
		'std' => '#ffffff',
		'type' => 'color');	
		
	$options[] = array(		
		'desc' => __('Select border color for book now button', 'skt-hotel'),
		'id' => 'bookbtnborder',
		'std' => '#03cbe9',
		'type' => 'color');	
	
	$options[] = array(
		'name' => __('Default Button Background Color', 'skt-hotel'),
		'desc' => __('Select background color for default buttons', 'skt-hotel'),
		'id' => 'defaultbutton',
		'std' => '#02abe5',
		'type' => 'color');									
		
	$options[] = array(
		'name' => __('Common Black Button', 'skt-hotel'),
		'desc' => __('Select background color for common black button', 'skt-hotel'),
		'id' => 'readmorebtn',
		'std' => '#3c3c3c',
		'type' => 'color');	
		
	$options[] = array(		
		'desc' => __('Select font color for read more button', 'skt-hotel'),
		'id' => 'readmorefontcolor',
		'std' => '#ffffff',
		'type' => 'color');	
		
	$options[] = array(		
		'desc' => __('Select border color for read more button', 'skt-hotel'),
		'id' => 'readmorebordercolor',
		'std' => '#e9e8e8',
		'type' => 'color');	
		
	$options[] = array(		
		'desc' => __('Select hover color for read more button', 'skt-hotel'),
		'id' => 'readmorehover',
		'std' => '#02abe5',
		'type' => 'color');	
		
	$options[] = array(
		'name' => __('Front Page Our Services', 'skt-hotel'),
		'desc' => __('Select background color for services li', 'skt-hotel'),
		'id' => 'libg',
		'std' => '#faf9f9',
		'type' => 'color');	
		
	$options[] = array(		
		'desc' => __('Select background hover color for services li', 'skt-hotel'),
		'id' => 'libghover',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(		
		'desc' => __('Select border color for services li', 'skt-hotel'),
		'id' => 'liborder',
		'std' => '#e9e8e8',
		'type' => 'color');	
		
	$options[] = array(		
		'desc' => __('Select font color for services li a', 'skt-hotel'),
		'id' => 'lifontcolor',
		'std' => '#3c3c3c',
		'type' => 'color');	
		
	$options[] = array(		
		'desc' => __('Select font size for services li', 'skt-hotel'),
		'id' => 'lifontsize',
		'std' => '16px',
		'type' => 'select',
		'options' => $font_sizes);	
		
	$options[] = array(
		'name' => __('Front Page Latest News Section', 'skt-hotel'),
		'desc' => __('Select background color for latest news, upcomin event and latest cuisines', 'skt-hotel'),
		'id' => 'threebxbg',
		'std' => '#ffffff',
		'type' => 'color');	
		
	$options[] = array(	
		'desc' => __('Select font family for  latest news, upcomin event', 'skt-hotel'),
		'id' => 'threebxfontface',
		'type' => 'select',
		'std' => 'Oswald',
		'options' => $font_types );		
		
	$options[] = array(		
		'desc' => __('Select font size for latest news, upcomin event', 'skt-hotel'),
		'id' => 'threebxfontsize',
		'std' => '14px',
		'type' => 'select',
		'options' => $font_sizes);	
		
	$options[] = array(		
		'desc' => __('Select font color for latest news, upcomin event', 'skt-hotel'),
		'id' => 'threebxfontcolor',
		'std' => '#373737',
		'type' => 'color');	
		
	$options[] = array(		
		'desc' => __('Select font hover color for latest news, upcomin event', 'skt-hotel'),
		'id' => 'threebxfontcolorhv',
		'std' => '#02aee7',
		'type' => 'color');							
		
	$options[] = array(
		'name' => __('Social Icons', 'skt-hotel'),
		'desc' => __('Change your social icon background color', 'skt-hotel'),
		'id' => 'socialiconcolor',
		'std' => "#8a8a8a",
		'type' => 'color');	
		
	$options[] = array(		
		'desc' => __('Change your social icon background hover color', 'skt-hotel'),
		'id' => 'socialiconhovercolor',
		'std' => "#02afe7",
		'type' => 'color');
		
	$options[] = array(		
		'desc' => __('select testimonials image border color', 'skt-hotel'),
		'id' => 'tmnborder',
		'std' => "#ffffff",
		'type' => 'color');	
		
	$options[] = array(
		'name' => __('Blog Single Layout', 'skt-hotel'),
		'desc' => __('Select layout for blog single post ex. left sidebar, right sidebar, full width, no sidebar', 'skt-hotel'),
		'id' => 'singlelayout',
		'type' => 'select',
		'std' => 'singleright',
		'options' => array('singleright'=>'Blog Single Right Sidebar', 'singleleft'=>'Blog Single Left Sidebar', 'sitefull'=>'Blog Single Full Width', 'nosidebar'=>'Blog Single No Sidebar') );					

	$options[] = array(
		'name' => __('Woocommerce Page Layout', 'skt-hotel'),
		'desc' => __('Select layout. eg:Boxed, Wide', 'skt-hotel'),
		'id' => 'woocomercelayout',
		'type' => 'select',
		'std' => 'woocomerceright',
		'options' => array('woocomerceright'=>'Woocomerce Right Sidebar', 'woocomerceleft'=>'Woocomerce Left Sidebar', 'woocomercesitefull'=>'Woocomerce Full Width') );

	//Layout Settings
	$options[] = array(
		'name' => __('Sections', 'skt-hotel'),
		'type' => 'heading');
		

	$options[] = array(
		'name' => __('Home Page section', 'skt-hotel'),
		'desc' => __('Show / Hide Home pages section', 'skt-hotel'),
		'id' => 'pagesboxshowhide',
		'type' => 'select',
		'std' => 'show',
		'options' => array('show'=>'Show', 'hide'=>'Hide') );	
		
		
	$options[] = array(
		'name' => __('Number of Sections', 'skt-hotel'),
		'desc' => __('Select number of sections', 'skt-hotel'),
		'id' => 'numsection',
		'type' => 'select',
		'std' => '6',
		'options' => array_combine(range(1,20), range(1,20)) );
	

	$numsecs = of_get_option( 'numsection', 6 );

	for( $n=1; $n<=$numsecs; $n++){
		$options[] = array(
			'desc' => __("<h3>Section ".$n."</h3>", 'skt-hotel'),
			'class' => 'toggle_title',
			'type' => 'info');	
	
		$options[] = array(
			'name' => __('Section Title', 'skt-hotel'),
			'id' => 'sectiontitle'.$n,
			'std' => ( ( isset($section_text[$n]['section_title']) ) ? $section_text[$n]['section_title'] : '' ),
			'type' => 'text');

		$options[] = array(
			'name' => __('Section Background Color', 'skt-hotel'),
			'desc' => __('Select background color for section', 'skt-hotel'),
			'id' => 'sectionbgcolor'.$n,
			'std' => ( ( isset($section_text[$n]['bgcolor']) ) ? $section_text[$n]['bgcolor'] : '' ),
			'type' => 'color');
			
		$options[] = array(
			'name' => __('Background Image', 'skt-hotel'),
			'id' => 'sectionbgimage'.$n,
			'class' => '',
			'std' => ( ( isset($section_text[$n]['bgimage']) ) ? $section_text[$n]['bgimage'] : '' ),
			'type' => 'upload');	

		$options[] = array(
			'name' => __('Section CSS Class', 'skt-hotel'),
			'desc' => __('Set class for this section.', 'skt-hotel'),
			'id' => 'sectionclass'.$n,
			'std' => ( ( isset($section_text[$n]['class']) ) ? $section_text[$n]['class'] : '' ),
			'type' => 'text');
			
		$options[] = array(
			'name'	=> __('Hide Section', 'skt-hotel'),
			'desc'	=> __('Check to hide this section', 'skt-hotel'),
			'id'	=> 'hidesec'.$n,
			'type'	=> 'checkbox',
			'std'	=> '');
			
		$options[] = array(
			'name' => __('Section Content', 'skt-hotel'),
			'id' => 'sectioncontent'.$n,
			'std' => ( ( isset($section_text[$n]['content']) ) ? $section_text[$n]['content'] : '' ),
			'type' => 'editor');
	}


	//SLIDER SETTINGS
	$options[] = array(
		'name' => __('Slider Images', 'skt-hotel'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Inner Page Banner', 'skt-hotel'),
		'desc' => __('Upload inner page banner for site', 'skt-hotel'),
		'id' => 'innerpagebanner',
		'class' => '',
		'std'	=> get_template_directory_uri()."/images/innerbanner.jpg",
		'type' => 'upload');	
		
	$options[] = array(
		'name' => __('Slider Effects and Timing', 'skt-hotel'),
		'desc' => __('Select slider effect.','skt-hotel'),
		'id' => 'slideefect',
		'std' => 'fade',
		'type' => 'select',
		'options' => array('random'=>'Random', 'fade'=>'Fade', 'fold'=>'Fold', 'sliceDown'=>'Slide Down', 'sliceDownLeft'=>'Slide Down Left', 'sliceUp'=>'Slice Up', 'sliceUpLeft'=>'Slice Up Left', 'sliceUpDown'=>'Slice Up Down', 'sliceUpDownLeft'=>'Slice Up Down Left', 'slideInRight'=>'SlideIn Right', 'slideInLeft'=>'SlideIn Left', 'boxRandom'=>'Box Random', 'boxRain'=>'Box Rain', 'boxRainReverse'=>'Box Rain Reverse', 'boxRainGrow'=>'Box Rain Grow', 'boxRainGrowReverse'=>'Box Rain Grow Reverse' ));
		
	$options[] = array(
		'desc' => __('Animation speed should be multiple of 100.', 'skt-hotel'),
		'id' => 'slideanim',
		'std' => 500,
		'type' => 'text');
		
	$options[] = array(
		'desc' => __('Add slide pause time.', 'skt-hotel'),
		'id' => 'slidepause',
		'std' => 3000,
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Slide Controllers', 'skt-hotel'),
		'desc' => __('Hide/Show Direction Naviagtion of slider.','skt-hotel'),
		'id' => 'slidenav',
		'std' => 'true',
		'type' => 'select',
		'options' => array('true'=>'Show', 'false'=>'Hide'));
		
	$options[] = array(
		'name' => __('Slide Pager Controllers', 'skt-hotel'),
		'desc' => __('Hide/Show pager of slider.','skt-hotel'),
		'id' => 'slidepage',
		'std' => 'false',
		'type' => 'select',
		'options' => array('true'=>'Show', 'false'=>'Hide'));
		
	$options[] = array(
		'desc' => __('Pause Slide on Hover.','skt-hotel'),
		'id' => 'slidepausehover',
		'std' => 'false',
		'type' => 'select',
		'options' => array('true'=>'Yes', 'false'=>'No'));
		
		
	$options[] = array(
		'name' => __('Use any slider shortcode', 'skt-hotel'),
		'desc' => __('you add any slider plugin shortcode here', 'skt-hotel'),
		'id' => 'slidershortcode',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'name' => __('Slider Image 1', 'skt-hotel'),
		'desc' => __('Upload / select image for slide 1', 'skt-hotel'),
		'id' => 'slide1',
		'class' => '',
		'std' => get_template_directory_uri()."/images/slides/slide_01.jpg",
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Slider Title 1', 'skt-hotel'),
		'id' => 'slidetitle1',
		'std' => 'Best Templates for <strong>Hotel Business</strong>',
		'type' => 'textarea');
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'skt-hotel'),
		'id' => 'slidedesc1',
		'std' => '',
		'type' => 'textarea');	

	$options[] = array(
		'desc' => __('Slide Button Text', 'skt-hotel'),
		'id' => 'slidebutton1',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'desc' => __('Slide Url', 'skt-hotel'),
		'id' => 'slideurl1',
		'std' => '',
		'type' => 'text');

	$options[] = array(
		'name' => __('Slider Image 2', 'skt-hotel'),
		'desc' => __('Upload / select image for slide 2', 'skt-hotel'),
		'id' => 'slide2',
		'class' => '',
		'std' => get_template_directory_uri()."/images/slides/slide_02.jpg",
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Slider Title 2', 'skt-hotel'),
		'id' => 'slidetitle2',
		'std' => 'Best Templates for <strong>Hotel Business</strong>',
		'type' => 'textarea');	
		
	$options[] = array(
		'desc' => __('Description or Tagline', 'skt-hotel'),
		'id' => 'slidedesc2',
		'std' => '',
		'type' => 'textarea');	
		

	$options[] = array(
		'desc' => __('Slide Button Text', 'skt-hotel'),
		'id' => 'slidebutton2',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'desc' => __('Slide Url', 'skt-hotel'),
		'id' => 'slideurl2',
		'std' => '',
		'type' => 'text');

	$options[] = array(
		'name' => __('Slider Image 3', 'skt-hotel'),
		'desc' => __('Upload / select image for slide 3', 'skt-hotel'),
		'id' => 'slide3',
		'class' => '',
		'std' => get_template_directory_uri()."/images/slides/slide_03.jpg",
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Slider Title 3', 'skt-hotel'),
		'id' => 'slidetitle3',
		'std' => 'Best Templates for <strong>Hotel Business</strong>',
		'type' => 'textarea');	
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'skt-hotel'),
		'id' => 'slidedesc3',
		'std' => '',
		'type' => 'textarea');	

	$options[] = array(
		'desc' => __('Slide Button Text', 'skt-hotel'),
		'id' => 'slidebutton3',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'desc' => __('Slide Url', 'skt-hotel'),
		'id' => 'slideurl3',
		'std' => '',
		'type' => 'text');

			
	$options[] = array(
		'name' => __('Slider Image 4', 'skt-hotel'),
		'desc' => __('Upload / select image for slide 4', 'skt-hotel'),
		'id' => 'slide4',
		'class' => '',
		'std' => get_template_directory_uri()."/images/slides/slide_04.jpg",
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Slider Title 4', 'skt-hotel'),
		'id' => 'slidetitle4',
		'std' => 'Best Templates for <strong>Hotel Business</strong>',
		'type' => 'textarea');		

		
	$options[] = array(
		'desc' => __('Description or Tagline', 'skt-hotel'),
		'id' => 'slidedesc4',
		'std' => '',
		'type' => 'textarea');	

	$options[] = array(
		'desc' => __('Slide Button Text', 'skt-hotel'),
		'id' => 'slidebutton4',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'desc' => __('Slide Url', 'skt-hotel'),
		'id' => 'slideurl4',
		'std' => '',
		'type' => 'text');

	$options[] = array(
		'name' => __('Slider Image 5', 'skt-hotel'),
		'desc' => __('Upload / select image for slide 5', 'skt-hotel'),
		'id' => 'slide5',
		'class' => '',
		'std' => '',
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Slider Title 5', 'skt-hotel'),
		'id' => 'slidetitle5',
		'std' => '',
		'type' => 'textarea');	
		
	$options[] = array(
		'desc' => __('Description or Tagline', 'skt-hotel'),
		'id' => 'slidedesc5',
		'std' => '',
		'type' => 'textarea');

	$options[] = array(
		'desc' => __('Slide Button Text', 'skt-hotel'),
		'id' => 'slidebutton5',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'desc' => __('Slide Url', 'skt-hotel'),
		'id' => 'slideurl5',
		'std' => '',
		'type' => 'text');

	$options[] = array(
		'name' => __('Slider Image 6', 'skt-hotel'),
		'desc' => __('Upload / select image for slide 6', 'skt-hotel'),
		'id' => 'slide6',
		'class' => '',
		'std' => '',
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Slider Title 6', 'skt-hotel'),
		'id' => 'slidetitle6',
		'std' => '',
		'type' => 'textarea');	

	$options[] = array(
		'desc' => __('Description or Tagline', 'skt-hotel'),
		'id' => 'slidedesc6',
		'std' => '',
		'type' => 'textarea');	

	$options[] = array(
		'desc' => __('Slide Button Text', 'skt-hotel'),
		'id' => 'slidebutton6',
		'std' => '',
		'type' => 'text');	

	$options[] = array(
		'desc' => __('Slide Url', 'skt-hotel'),
		'id' => 'slideurl6',
		'std' => '',
		'type' => 'text');

	$options[] = array(
		'name' => __('Slider Image 7', 'skt-hotel'),
		'desc' => __('Upload / select image for slide 7', 'skt-hotel'),
		'id' => 'slide7',
		'class' => '',
		'std' => '',
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Slider Title 7', 'skt-hotel'),
		'id' => 'slidetitle7',
		'std' => '',
		'type' => 'textarea');	

	$options[] = array(
		'desc' => __('Description or Tagline', 'skt-hotel'),
		'id' => 'slidedesc7',
		'std' => '',
		'type' => 'textarea');	

	$options[] = array(
		'desc' => __('Slide Button Text', 'skt-hotel'),
		'id' => 'slidebutton7',
		'std' => '',
		'type' => 'text');	

	$options[] = array(
		'desc' => __('Slide Url', 'skt-hotel'),
		'id' => 'slideurl7',
		'std' => '',
		'type' => 'text');

	$options[] = array(
		'name' => __('Slider Image 8', 'skt-hotel'),
		'desc' => __('Upload / select image for slide 8', 'skt-hotel'),
		'id' => 'slide8',
		'class' => '',
		'std' => '',
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Slider Title 8', 'skt-hotel'),
		'id' => 'slidetitle8',
		'std' => '',
		'type' => 'textarea');	

		
	$options[] = array(
		'desc' => __('Description or Tagline', 'skt-hotel'),
		'id' => 'slidedesc8',
		'std' => '',
		'type' => 'textarea');

	$options[] = array(
		'desc' => __('Slide Button Text', 'skt-hotel'),
		'id' => 'slidebutton8',
		'std' => '',
		'type' => 'text');	

	$options[] = array(
		'desc' => __('Slide Url', 'skt-hotel'),
		'id' => 'slideurl8',
		'std' => '',
		'type' => 'text');

	$options[] = array(
		'name' => __('Slider Image 9', 'skt-hotel'),
		'desc' => __('Upload / select image for slide 9', 'skt-hotel'),
		'id' => 'slide9',
		'class' => '',
		'std' => '',
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Slider Title 9', 'skt-hotel'),
		'id' => 'slidetitle9',
		'std' => '',
		'type' => 'textarea');	

	$options[] = array(
		'desc' => __('Description or Tagline', 'skt-hotel'),
		'id' => 'slidedesc9',
		'std' => '',
		'type' => 'textarea');

	$options[] = array(
		'desc' => __('Slide Button Text', 'skt-hotel'),
		'id' => 'slidebutton9',
		'std' => '',
		'type' => 'text');	

	$options[] = array(
		'desc' => __('Slide Url', 'skt-hotel'),
		'id' => 'slideurl9',
		'std' => '',
		'type' => 'text');

   $options[] = array(
		'name' => __('Slider Image 10', 'skt-hotel'),
		'desc' => __('Upload / select image for slide 10', 'skt-hotel'),
		'id' => 'slide10',
		'class' => '',
		'std' => '',
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Slider Title 10', 'skt-hotel'),
		'id' => 'slidetitle10',
		'std' => '',
		'type' => 'textarea');	

	$options[] = array(
		'desc' => __('Description or Tagline', 'skt-hotel'),
		'id' => 'slidedesc10',
		'std' => '',
		'type' => 'textarea');

	$options[] = array(
		'desc' => __('Slide Button Text', 'skt-hotel'),
		'id' => 'slidebutton10',
		'std' => '',
		'type' => 'text');	

	$options[] = array(
		'desc' => __('Slide Url', 'skt-hotel'),
		'id' => 'slideurl10',
		'std' => '',
		'type' => 'text');
	
						
// Conatct Info Tab					
	$options[] = array(
		'name' => __('Contact Info', 'skt-hotel'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Contact Heading', 'skt-hotel'),
		'desc' => __('Contact Heading Name for the theme', 'skt-hotel'),
		'id' => 'contactheading',
		'std' => 'SKT Hotel',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Contact Heading Font Color', 'skt-hotel'),
		'desc' => __('Select Contact Heading h3 font color', 'skt-hotel'),
		'id' => 'chfontcolor',
		'std' => '#02abe5',
		'type' => 'color');		
		
	$options[] = array(
		'name' => __('Address1', 'skt-hotel'),
		'desc' => __('Address1 for your site.', 'skt-hotel'),
		'id' => 'address1',
		'std' => 'Office Blvd No. 000-000,',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Address2', 'skt-hotel'),
		'desc' => __('Address2 for your site.', 'skt-hotel'),
		'id' => 'address2',
		'std' => 'Farmville Town, LA 12345 ',
		'type' => 'text');		
		
	$options[] = array(
		'name' => __('Telephone No.', 'skt-hotel'),
		'desc' => __('Telephone No. for your site.', 'skt-hotel'),
		'id' => 'phone',
		'std' => '+62 500 800 123',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Fax No.', 'skt-hotel'),
		'desc' => __('Fax No. for your site.', 'skt-hotel'),
		'id' => 'fax',
		'std' => '+62 500 800 112',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Email Address.', 'skt-hotel'),
		'desc' => __('Email Address for your site.', 'skt-hotel'),
		'id' => 'email',
		'std' => 'site@example.com',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Website Url.', 'skt-hotel'),
		'desc' => __('Website Url for your site.', 'skt-hotel'),
		'id' => 'website',
		'std' => 'www.yourdomain.com',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Google Map', 'skt-hotel'),
		'desc' => __('Use iframe code url here. DO NOT APPLY IFRAME TAG', 'skt-hotel'),
		'id' => 'googlemap',
		'std' => 'https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d7443.737963035647!2d79.04306!3d21.11778900000001!3m2!1i1024!2i768!4f13.1!2m1!1sShri+Krishna+Technologies%2C+Nagpur%2C+Maharashtra%2C+India!5e0!3m2!1sen!2sus!4v1415081518119',
		'type' => 'textarea');	
		
	// Footer Tab					
	$options[] = array(
		'name' => __('Footer', 'skt-hotel'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('About Footer', 'skt-hotel'),
		'desc' => __('Upload your footer background image', 'skt-hotel'),
		'id' => 'footerbgimg',
		'class' => '',
		'std'	=> '',
		'type' => 'upload');	

	$options[] = array(		
		'desc' => __('Select background color for footer', 'skt-hotel'),
		'id' => 'footerbgcolor',
		'std' => '#1f1f1f',
		'type' => 'color');
		
	$options[] = array(	
		'desc' => __('Select font size for footer', 'skt-hotel'),
		'id' => 'footerfontsize',
		'std' => '12px',
		'type' => 'select',
		'options' => $font_sizes);	

	$options[] = array(		
		'desc' => __('Select font color for footer', 'skt-hotel'),
		'id' => 'footerfontcolor',
		'std' => '#ffffff',
		'type' => 'color');	
		
		
 	$options[] = array(		
		'desc' => __('Select font size for footer headings', 'skt-hotel'),
		'id' => 'footerh3fontsize',
		'std' => '24px',
		'type' => 'select',
		'options' => $font_sizes);
		
	$options[] = array(		
		'desc' => __('Select font color for footer headings', 'skt-hotel'),
		'id' => 'footerheadfontcolor',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(		
		'desc' => __('Select border color for footer headings', 'skt-hotel'),
		'id' => 'footerheadborder',
		'std' => '#101010',
		'type' => 'color');	
		
	$options[] = array(		
		'desc' => __('Select font color for footer links', 'skt-hotel'),
		'id' => 'footerlinkcolor',
		'std' => '#ffffff',
		'type' => 'color');

	$options[] = array(		
		'desc' => __('Select font color for footer link hover', 'skt-hotel'),
		'id' => 'footerlinkhovercolor',
		'std' => '#02aae1',
		'type' => 'color');	
		
	$options[] = array(		
		'desc' => __('Select font color for footer current menu', 'skt-hotel'),
		'id' => 'footercurrentmenu',
		'std' => '#02abe5',
		'type' => 'color');	
		
	$options[] = array(		
		'desc' => __('Select font color for footer latest news title', 'skt-hotel'),
		'id' => 'latestnewstitle',
		'std' => '#02aae1',
		'type' => 'color');	
		
	$options[] = array(
		'name' => __('About Copyright', 'skt-hotel'),
		'desc' => __('Select background color for copyrights', 'skt-hotel'),
		'id' => 'copybgcolor',
		'std' => '#000000',
		'type' => 'color');
		
	$options[] = array(		
		'desc' => __('Select font size for copyright', 'skt-hotel'),
		'id' => 'copyfontsize',
		'std' => '14px',
		'type' => 'select',
		'options' => $font_sizes);		

	$options[] = array(	
		'desc' => __('Select font color for copyright', 'skt-hotel'),
		'id' => 'copyfontcolor',
		'std' => '#a8a8a8',
		'type' => 'color');	
		
	$options[] = array(		
		'desc' => __('Some text for footer of your site, you would like to display in the footer.', 'skt-hotel'),
		'id' => 'footertext',
		'std' => 'Copyright &copy; 2016 SKT Hotel - All Rights Reserved.',
		'type' => 'textarea');
		
	$options[] = array(		
		'desc' => __('Some text for footer of your site', 'skt-hotel'),
		'id' => 'themebytext',
		'std' => 'Design by <a href="'.SKT_THEME_URL.'" target="_blank">SKT Wordpress Themes</a>',
		'type' => 'textarea');
		
	$options[] = array(	
		'name' => __('Footer Social Icons', 'skt-hotel'),	
		'desc' => __('add social icon name and link in the shortcodes', 'skt-hotel'),
		'id' => 'socialicons',
		'std' => '[social_area]
    [social icon="facebook" link="#"]
    [social icon="twitter" link="#"]
    [social icon="linkedin" link="#"]
    [social icon="pinterest" link="#"]
    [social icon="rss" link="#"]
    [social icon="youtube" link="#"]
    [social icon="google-plus" link="#"]
    [social icon="instagram" link="#"]
    [social icon="wordpress" link="#"]	
	[social icon="skype" link="#"]
	[social icon="yahoo" link="#"]
	[social icon="flickr" link="#"]
[/social_area]',
		'type' => 'textarea');					
		
	$options[] = array(
		'name' => __('Footer Heading', 'skt-hotel'),
		'desc' => __('select footer heading for first column', 'skt-hotel'),
		'id' => 'foothead1',
		'std' => 'Main Menu',
		'type' => 'text');
		
	$options[] = array(		
		'desc' => __('select footer heading for second column', 'skt-hotel'),
		'id' => 'foothead2',
		'std' => 'Latest News',
		'type' => 'text');	
		
	$options[] = array(		
		'desc' => __('select footer heading for third column', 'skt-hotel'),
		'id' => 'foothead3',
		'std' => 'Follow Us',
		'type' => 'text');
		
	$options[] = array(		
		'desc' => __('select footer heading for fourth column', 'skt-hotel'),
		'id' => 'foothead4',
		'std' => 'Get in Touch',
		'type' => 'text');	
		
		
	//Short codes
	$options[] = array(
		'name' => __('Short Codes', 'skt-hotel'),
		'type' => 'heading');	
				
	$options[] = array(
		'name' => __('Recent Posts', 'skt-hotel'),
		'desc' => __('<pre>
[recentposts show="3"]
</pre>', 'skt-hotel'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Team Member', 'skt-hotel'),
		'desc' => __('<pre>
[teammember col="4"]
</pre>', 'skt-hotel'),
		'type' => 'info');	
		
	$options[] = array(
		'name' => __('Testimonials', 'skt-hotel'),
		'desc' => __('<pre>
[testimonials]
</pre>', 'skt-hotel'),
		'type' => 'info');				
		
	$options[] = array(
		'name' => __('Contact Form', 'skt-hotel'),
		'desc' => __('<pre>
[contactform to_email="test@example.com" title="Contact Form"]
</pre>', 'skt-hotel'),
		'type' => 'info');	
		
	$options[] = array(
		'name' => __('Code', 'skt-hotel'),
		'desc' => __('[code type="php/html"]
		Your code here.
		[/code] 
', 'skt-hotel'),
		'type' => 'info');	
		
	$options[] = array(
		'name' => __('Gallery', 'skt-hotel'),
		'desc' => __('[portfolio cat="Category Name"]', 'skt-hotel'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Gallery style 2', 'skt-hotel'),
		'desc' => __('[portfolio-slider cat="Category Name"]', 'skt-hotel'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Gallery style 3', 'skt-hotel'),
		'desc' => __('[portfolio-thumbnail cat="Category Name"]', 'skt-hotel'),
		'type' => 'info');	
		
	$options[] = array(
		'name' => __('Rooms and Rates', 'skt-hotel'),
		'desc' => __('
[rooms-rate link="#" img="http://sktthemesdemo.net/hotel/wp-content/uploads/2013/08/Standard-Room.jpg" title="Suite"  rate="$400"]Praesent vitae odio eget felis vehicula vulputate sit amet ut tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus muscular[/rooms-rate]', 'skt-hotel'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Upcoming Events', 'skt-hotel'),
		'desc' => __('
[events link="#" date="<span>15</span>June" title="Maecenas quis nisl quis"]Lorem ipsum dolor sit ame turndn adipising elit. Integer ame...[/events]', 'skt-hotel'),
		'type' => 'info');			
	
	$options[] = array(
		'name' => __('Animation Name list', 'skt-hotel'),
		'desc' => __('bounce, flash, pulse, shake, swing, tada, wobble, bounceIn, bounceInDown, bounceInLeft, bounceInRight, bounceInUp, bounceOut, bounceOutDown, bounceOutLeft, bounceOutRight, bounceOutUp, fadeIn, fadeInDown, fadeInDownBig, fadeInLeft, fadeInLeftBig, fadeInRight, fadeInRightBig, fadeInUp, fadeInUpBig, fadeOut, fadeOutDown, fadeOutDownBig, fadeOutLeft, fadeOutLeftBig, fadeOutRight, fadeOutRightBig, fadeOutUp, fadeOutUpBig, flip, flipInX, flipInY, flipOutX, flipOutY, lightSpeedIn, lightSpeedOut, rotateIn, rotateInDownLeft, rotateInDownRight, rotateInUpLeft, rotateInUpRight, rotateOut, rotateOutDownLeft, rotateOutDownRight, rotateOutUpLeft, rotateOutUpRight, slideInDown, slideInLeft, slideInRight, slideOutLeft, slideOutRight, slideOutUp, rollIn, rollOut, zoomIn, zoomInDown, zoomInLeft, zoomInRight, zoomInUp', 'skt-hotel'),
		'type' => 'info');	

	$options[] = array(
		'name' => __('2 Column Content', 'skt-hotel'),
		'desc' => __('<pre>
[column_content type="one_half" animation="name of animation"]
	Column 1 Content goes here...
[/column_content]

[column_content type="one_half_last" animation="name of animation"]
	Column 2 Content goes here...
[/column_content]
</pre>', 'skt-hotel'),
		'type' => 'info');	

	$options[] = array(
		'name' => __('3 Column Content', 'skt-hotel'),
		'desc' => __('<pre>
[column_content type="one_third" animation="name of animation"]
	Column 1 Content goes here...
[/column_content]

[column_content type="one_third" animation="name of animation"]
	Column 2 Content goes here...
[/column_content]

[column_content type="one_third_last" animation="name of animation"]
	Column 3 Content goes here...
[/column_content]
</pre>', 'skt-hotel'),
		'type' => 'info');	

	$options[] = array(
		'name' => __('4 Column Content', 'skt-hotel'),
		'desc' => __('<pre>
[column_content type="one_fourth" animation="name of animation"]
	Column 1 Content goes here...
[/column_content]

[column_content type="one_fourth" animation="name of animation"]
	Column 2 Content goes here...
[/column_content]

[column_content type="one_fourth" animation="name of animation"]
	Column 3 Content goes here...
[/column_content]

[column_content type="one_fourth_last" animation="name of animation"]
	Column 4 Content goes here...
[/column_content]
</pre>', 'skt-hotel'),
		'type' => 'info');	

	$options[] = array(
		'name' => __('5 Column Content', 'skt-hotel'),
		'desc' => __('<pre>
[column_content type="one_fifth" animation="name of animation"]
	Column 1 Content goes here...
[/column_content]

[column_content type="one_fifth" animation="name of animation"]
	Column 2 Content goes here...
[/column_content]

[column_content type="one_fifth" animation="name of animation"]
	Column 3 Content goes here...
[/column_content]

[column_content type="one_fifth" animation="name of animation"]
	Column 4 Content goes here...
[/column_content]

[column_content type="one_fifth_last" animation="name of animation"]
	Column 5 Content goes here...
[/column_content]
</pre>', 'skt-hotel'),
		'type' => 'info');	

	$options[] = array(
		'name' => __('Clear', 'skt-hotel'),
		'desc' => __('<pre>
[clear]
</pre>', 'skt-hotel'),
		'type' => 'info');	

	$options[] = array(
		'name' => __('HR / Horizontal separation line', 'skt-hotel'),
		'desc' => __('<pre>
[hr] or &lt;hr&gt;
</pre>', 'skt-hotel'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Separator Width Image', 'skt-hotel'),
		'desc' => __('<pre>
[separator height="20"]
</pre>', 'skt-hotel'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Blank Space With Clear Both', 'skt-hotel'),
		'desc' => __('<pre>
[space height="20"]
</pre>', 'skt-hotel'),
		'type' => 'info');	
		
	$options[] = array(
		'name' => __('Blank Space without clear both', 'skt-hotel'),
		'desc' => __('<pre>
[blankspace height="20"]
</pre>', 'skt-hotel'),
		'type' => 'info');	
		
	$options[] = array(
		'name' => __('Custom Width', 'skt-hotel'),
		'desc' => __('<pre>
[area width="30%"]Your content or image here[/area]
</pre>', 'skt-hotel'),
		'type' => 'info');	

	$options[] = array(
		'name' => __('Tabs', 'skt-hotel'),
		'desc' => __('<pre>
[tabs]
	[tab title="TAB TITLE 1"]
		TAB CONTENT 1
	[/tab]
	[tab title="TAB TITLE 2"]
		TAB CONTENT 2
	[/tab]
	[tab title="TAB TITLE 3"]
		TAB CONTENT 3
	[/tab]
[/tabs]
</pre>', 'skt-hotel'),
		'type' => 'info');


	$options[] = array(
		'name' => __('Toggle Content', 'skt-hotel'),
		'desc' => __('<pre>
[toggle_content title="Toggle Title 1"]
	Toggle content 1...
[/toggle_content]
[toggle_content title="Toggle Title 2"]
	Toggle content 2...
[/toggle_content]
[toggle_content title="Toggle Title 3"]
	Toggle content 3...
[/toggle_content]
</pre>', 'skt-hotel'),
		'type' => 'info');


	$options[] = array(
		'name' => __('Accordion Content', 'skt-hotel'),
		'desc' => __('<pre>
[accordion]
	[accordion_content title="ACCORDION TITLE 1"]
		ACCORDION CONTENT 1
	[/accordion_content]
	[accordion_content title="ACCORDION TITLE 2"]
		ACCORDION CONTENT 2
	[/accordion_content]
	[accordion_content title="ACCORDION TITLE 3"]
		ACCORDION CONTENT 3
	[/accordion_content]
[/accordion]
</pre>', 'skt-hotel'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Gradient Button - Small', 'skt-hotel'),
		'desc' => __('<pre>
[gradient_button size="small" bg_color="#e00" color="#fff" text="Medium Gradient Button" title="Medium Gradient Button" url="" position="left"]
</pre>', 'skt-hotel'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Gradient Button - Medium', 'skt-hotel'),
		'desc' => __('<pre>
[gradient_button size="medium" bg_color="#060" color="#fff" text="Medium Gradient Button" title="Medium Gradient Button" url="" position="left"]
</pre>', 'skt-hotel'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Gradient Button - Large', 'skt-hotel'),
		'desc' => __('<pre>
[gradient_button size="large" bg_color="#026" color="#fff" text="Large Gradient Button" title="Large Gradient Button" url="" position="left"]
</pre>', 'skt-hotel'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Gradient Button - Xtra Large', 'skt-hotel'),
		'desc' => __('<pre>
[gradient_button size="x-large" bg_color="#00ccff" color="#fff" text="Extra Large Simple Button" title="Extra Large Simple Button" url="" position="left"]
</pre>', 'skt-hotel'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Simple Button - Small', 'skt-hotel'),
		'desc' => __('<pre>
[simple_button size="small" bg_color="#c00" color="#fff" text="Small Simple Button" title="Small Simple Button" url="#" position="left"]
</pre>', 'skt-hotel'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Simple Button - Medium', 'skt-hotel'),
		'desc' => __('<pre>
[simple_button size="medium" bg_color="#060" color="#fff" text="Medium Simple Button" title="Medium Simple Button" url="" position="left"]
</pre>', 'skt-hotel'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Simple Button - Large', 'skt-hotel'),
		'desc' => __('<pre>
[simple_button size="large" bg_color="#026" color="#fff" text="Large Simple Button" title="Large Simple Button" url="" position="left"]
</pre>', 'skt-hotel'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Simple Button - Xtra Large', 'skt-hotel'),
		'desc' => __('<pre>
[simple_button size="x-large" bg_color="#00ccff" color="#fff" text="Extra Large Simple Button" title="Extra Large Simple Button" url="" position="left"]
</pre>', 'skt-hotel'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Round Button - Light', 'skt-hotel'),
		'desc' => __('<pre>
[round_button style="light" text="Round Button" title="Round Button" url="" position="left"]
</pre>', 'skt-hotel'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Round Button - Dark', 'skt-hotel'),
		'desc' => __('<pre>
[round_button style="dark" text="Round Button" title="Round Button" url="" position="left"]
</pre>', 'skt-hotel'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Message Box - Success', 'skt-hotel'),
		'desc' => __('<pre>
[message type="success"]This is a sample of the \'success\' style message box shortcode. To use this style use the following shortcode[/message]

</pre>', 'skt-hotel'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Message Box - Error', 'skt-hotel'),
		'desc' => __('<pre>
[message type="error"]This is a sample of the \'error\' style message box shortcode. To use this style use the following shortcode.[/message]
</pre>', 'skt-hotel'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Message Box - Warning', 'skt-hotel'),
		'desc' => __('<pre>
[message type="warning"]This is a sample of the \'warning\' style message box shortcode. To use this style use the following shortcode.[/message]
</pre>', 'skt-hotel'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Message Box - Info', 'skt-hotel'),
		'desc' => __('<pre>
[message type="info"]This is a sample of the \'info\' style message box shortcode. To use this style use the following shortcode.[/message]
</pre>', 'skt-hotel'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Message Box - About', 'skt-hotel'),
		'desc' => __('<pre>
[message type="about"]This is a sample of the \'about\' style message box shortcode. To use this style use the following shortcode.[/message]
</pre>', 'skt-hotel'),
		'type' => 'info');

	$options[] = array(
		'name' => __('List Styles', 'skt-hotel'),
		'desc' => __('<pre>
[unordered_list style="list-1"]&lt;li&gt;List style 1&lt;/li&gt;[/unordered_list]
</pre>
<br />You can use above shortcode OR simply add class to ul. You can choose from list-1 to list-10 styles.<br />
<pre>
&lt;ul class="list-1"&gt;&lt;li&gt;List style 1&lt;/li&gt;&lt;/ul&gt;
</pre>
', 'skt-hotel'),
		'type' => 'info');	
		
	$options[] = array(
		'name' => __('Pricing Table', 'skt-hotel'),
		'desc' => __('<pre>
[pricing_table]
[price_column bgcolor="#373838"]
[price_header]Basic[/price_header]
[price_row]$49.99 Per month[/price_row]
[price_row]5GB Bandwidth[/price_row]
[price_row]1GB Storage[/price_row]
[price_row]1 Domain[/price_row]
[price_row]10 Email Accounts[/price_row]
[price_footer]Buy Basic[/price_footer]
[/price_column]
[price_column highlight="yes" bgcolor="#3099d3"]
[price_header]Premium[/price_header]
[price_row]$99.99 Per month[/price_row]
[price_row]20GB Bandwidth[/price_row]
[price_row]5GB Storage[/price_row]
[price_row]5 Domains[/price_row]
[price_row]25 Email Accounts[/price_row]
[price_footer]Buy Premium[/price_footer]
[/price_column]
[price_column bgcolor="#83672b "]
[price_header]Professional[/price_header]
[price_row]$149.99 Per month[/price_row]
[price_row]50GB Bandwidth[/price_row]
[price_row]10GB Storage[/price_row]
[price_row]20 Domains[/price_row]
[price_row]50 Email Accounts[/price_row]
[price_footer]Buy Professional[/price_footer]
[/price_column]
[price_column]
[price_header]Ultimate[/price_header]
[price_row]$199.99 Per month[/price_row]
[price_row]Unlimited Bandwidth[/price_row]
[price_row]Unlimited Storage[/price_row]
[price_row]50 Domains[/price_row]
[price_row]100 Email Accounts[/price_row]
[price_footer]Buy Ultimate[/price_footer]
[/price_column]
[/pricing_table]
</pre>', 'skt-exceptiona'),
		'type' => 'info');						
				

	// Support					
	$options[] = array(
		'name' => __('Our Themes', 'skt-hotel'),
		'type' => 'heading');

	$options[] = array(
		'desc' => __('SKT Hotel WordPress theme has been Designed and Created by SKT Themes.', 'skt-hotel'),
		'type' => 'info');	

	 $options[] = array(
		'desc' => __('<a href="'.SKT_THEME_URL.'" target="_blank"><img src="'.get_template_directory_uri().'/images/sktskill.jpg"></a>', 'skt-hotel'),
		'type' => 'info');	

	return $options;
}