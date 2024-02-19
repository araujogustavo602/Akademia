<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800;900&family=Roboto:ital,wght@1,500&display=swap" rel="stylesheet">

    <title>Akademia</title>
</head>
<body>
    <?php
        include_once('./components/header.php');
    ?>

    <section class="banner">
        <img src="./assets/banner.png" alt="banner da página">
    </section>
    
    <main>
        <section class="saude">
            <h2>Sua saúde em movimento!</h2>

            <p>
                Bem-vindos à Akademia - o local onde seus objetivos de condicionamento físico se transformam em realidade! Somos uma academia de ginástica apaixonada por promover uma vida mais saudável e ativa para todos os nossos membros. Aqui na Akademia, você encontrará um ambiente acolhedor e motivador, repleto de equipamentos modernos, aulas desafiadoras e instrutores altamente qualificados. Independentemente do seu nível de aptidão ou idade, nossa missão é inspirá-lo a alcançar o melhor de si mesmo, oferecendo programas personalizados que se adaptam às suas necessidades individuais. Junte-se a nós e embarque nessa jornada emocionante em direção a um corpo mais forte, uma mente mais clara e uma vida cheia de energia e vitalidade. Seja bem-vindo à Akademia, onde o bem-estar se torna uma paixão compartilhada!
            </p>
        </section>

        <section class="modalidades" id="servicos">
            <h2>Nossas modalidades</h2>

            <article class="area-card">
                <div class="card">
                    <img src="./assets/musculacao.png" alt="">
                    <span>Musculação</span>
                </div>
                <div class="card">
                    <img src="./assets/ginastica.png" alt="">
                    <span>Ginástica</span>
                </div>
                <div class="card">
                    <img src="./assets/yoga.png" alt="">
                    <span>Yoga</span>
                </div>
            </article>

            <article class="button-modalidades">
                <button>Confira todas as opções</button>
            </article>
        </section>
    </main>

    <?php
        include_once('./components/footer.php');
    ?>
</body>
</html>