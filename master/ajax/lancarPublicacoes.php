<?php
require_once(__DIR__ . "/../../includes.php");
require_once(__DIR__ . "/../protect.php");
require_once(__DIR__."/../../Daofactory/usuarios.php");
require_once(__DIR__."/../../Daofactory/post.php");

$usuarios = Usuarios::getAllUsuarios();

$quantidade_desejada = 5;//quantidade de publicações a serem lançadas
$privacidade = 'publico';

$comentarios_predefinidos = [
    "Refletindo sobre as pequenas vitórias diárias. Às vezes, são os momentos simples que fazem a vida incrível. #Gratidão",
    "Iniciando uma nova jornada! Mal posso esperar para ver o que o futuro reserva. #NovosComeços",    
    "Sábado à noite = Netflix + pijamas. A vida adulta é emocionante, não é mesmo? #NoiteTranquila",    
    "Amando minha rotina matinal! Café, música e um pouco de sol para começar o dia com energia positiva. #BomDia",
    "Hoje é um daqueles dias em que a playlist no repeat é a única solução. #Vibes",    
    "Celebrando conquistas pequenas, mas significativas! Cada passo conta. #Progresso",    
    "Às vezes, tudo que você precisa é de um abraço apertado e um bom livro. #MomentosAconchegantes",    
    "A vida é uma jornada incrível, cheia de altos e baixos. Estou aprendendo a abraçar ambos com gratidão. #CaminhoPessoal",    
    "Domingo preguiçoso em casa. O lar é onde o coração está. #Descanso",    
    "Explorando novos horizontes e abraçando desafios. A vida é uma aventura constante! #Aventureiro",    
    "Nada como um bom café para iniciar o dia. Quem mais é viciado em cafeína por aqui?",    
    "Às vezes, o melhor plano é não ter plano algum. Deixe-se surpreender pelo inesperado! #Espontaneidade",    
    "Aprendendo a dizer 'sim' para novas oportunidades e 'não' para o que não acrescenta. #AutoCuidado",    
    "Grato pelas amizades que resistem ao teste do tempo. Vocês são minha rocha! #AmizadeVerdadeira",    
    "Mente sã, corpo são. Priorizando o bem-estar em todas as áreas da vida. #Equilíbrio",    
    "Às vezes, a simplicidade é a chave da felicidade. #VivaSimples",    
    "Em busca da minha versão mais autêntica. Aceitar quem somos é a verdadeira liberdade. #AuthenticSelf",    
    "Recordações de viagens que alimentam a alma. #Wanderlust",    
    "A vida é uma mistura de caos e calma. Encontre beleza em ambos. #Equilíbrio",    
    "Abraçando a jornada do autodescobrimento. Afinal, a vida é uma constante evolução. #CrescimentoPessoal",    
    "A vida é feita de capítulos, e estou animado para começar um novo! #NovasAventuras",    
    "Aprendendo a dança da paciência enquanto espero que os planos se desdobrem. #Confiança",    
    "Hoje é daqueles dias em que a inspiração está no ar. Pronto para criar algo incrível! #Criatividade",    
    "Um café, um sorriso e a certeza de que cada dia é uma dádiva. #Grato",    
    "Descobrindo que a felicidade está nas pequenas coisas, como um pôr do sol colorido. #MomentosMágicos",    
    "Deixe o passado para trás, viva o presente e construa o futuro. #Jornada",    
    "A vida é uma constante metamorfose. Aceitar a mudança é abraçar a evolução. #Transformação",
    "Às vezes, a trilha mais difícil leva aos destinos mais bonitos. #Persistência",
    "Refletindo sobre as lições que a vida me ensinou até agora. Cada desafio é uma oportunidade de crescimento. #Aprendizado",
    "A alegria está nas relações verdadeiras. Sorte em ter pessoas incríveis ao meu redor! #AmigosParaSempre",
    "Inspirado pela natureza e sua capacidade de renovar. #Renovação",
    "Dias chuvosos pedem livros e cobertores. Qual é o seu livro favorito para dias assim?#Leitura",
    "Caminhando com confiança na direção dos meus sonhos. O destino é incerto, mas a jornada é emocionante. #Sonhador",
    "Gratidão pelo poder curativo do riso. Que as risadas sejam frequentes e contagiosas! #BomHumor",
    "Às vezes, a única resposta necessária é um abraço apertado. #Conexão",
    "Descobrindo que a simplicidade é a verdadeira sofisticação. #Elegância",
    "Relembrando momentos que me fizeram sorrir. Que as memórias felizes sempre prevaleçam. #Flashback",
    "Explorando novos hobbies e descobrindo paixões. O que você gostaria de experimentar este ano? #Descobertas",
    "A vida é como uma canção, com altos e baixos. Hoje, estou apenas apreciando a melodia. #Harmonia",
    "Cultivando um jardim de gratidão. Cada flor representa uma bênção na minha vida. #Grato",
    "Às vezes, o caos é a faísca que acende uma ideia brilhante. #CriatividadeCaótica",
    "A arte de deixar ir é uma das lições mais valiosas que a vida ensina. #Desapego",
    "Em busca de equilíbrio entre trabalho e lazer. Porque a vida é para ser vivida, não apenas trabalhada. #EquilíbrioVital",
    "Sábado: tempo de recarregar energias para a semana que está por vir. #FimDeSemana",
    "Celebrando as pequenas vitórias que constroem o caminho para grandes conquistas. #SucessoProgressivo",
    "Mente positiva, vida positiva. Que as boas vibrações guiem o meu dia. #Positividade",
    "Descobrindo a beleza na simplicidade cotidiana. Às vezes, menos é mais. #Minimalismo",
    "Nada como uma boa trilha sonora para acompanhar o ritmo da vida. Qual é a sua música do momento? #PlaylistDoDia",
    "Aprendendo a apreciar a jornada, mesmo quando o destino ainda não está claro. #CaminhoIncerto",
    "Um brinde à vida, ao amor e às possibilidades infinitas que cada novo dia traz. #CelebreAVida"
];


for($i=1; $i <= $quantidade_desejada; $i++){
    $usuario_sorteado = mt_rand(0, count($usuarios)-1);
    $comentario_sorteado = mt_rand(0, count($comentarios_predefinidos)-1);

    $usuario_id = $usuarios[$usuario_sorteado]['id'];

    $resultado = Post::insertPost($comentarios_predefinidos[$comentario_sorteado], $usuario_id, $privacidade);

    if($resultado){
        echo "<div>um post inserido para o usuario: ".$usuarios[$usuario_sorteado]['usuario']." !</div>";
    }else{
        echo "<div>Erro ao inserir post para o usuario: ".$usuarios[$usuario_sorteado]['usuario']." !</div>";
    }
}