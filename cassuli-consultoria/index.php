<?php
$config = require __DIR__ . '/config.php';
$waMessage = rawurlencode($config['whatsapp_message']);
$waLink = "https://wa.me/{$config['whatsapp']}?text={$waMessage}";

$services = [
    [
        'icon' => 'document',
        'title' => 'ANM e Processos Minerários',
        'items' => [
            'Gerenciamento de Processos Minerários',
            'Autorização de Pesquisa Mineral (REPEM)',
            'Permissão de Lavra Garimpeira (PLG)',
            'Registro de Licença e Registro de Extração',
            'Relatórios RAL, RFP, RPP e PAE',
            'Cessão de Direitos Minerários',
            'Cumprimento de Exigências e editais',
        ],
    ],
    [
        'icon' => 'mine',
        'title' => 'Serviços e Projetos de Mina',
        'items' => [
            'Responsabilidade Técnica junto ao CREA',
            'Gerenciamento de Pesquisa Mineral',
            'Apuração e Controle da CFEM',
            'Projetos e planos de estéril e rejeito',
            'Plano de Segurança e Plano de Fogo',
            'Plano de Fechamento de Mina',
            'Gestão de explosivos junto ao SICOEX',
        ],
    ],
    [
        'icon' => 'leaf',
        'title' => 'Licenciamento Ambiental',
        'items' => [
            'Licenças LP, LI e LO',
            'Renovação de Licença Ambiental',
            'EIA/RIMA, RCA e PCA',
            'PRAD e PCIAM',
            'Plano de Gerenciamento de Resíduos (PGRS)',
            'Gestão de condicionantes ambientais',
            'RAPP e Responsabilidade Técnica junto ao IBAMA',
        ],
    ],
    [
        'icon' => 'drone',
        'title' => 'Topografia e Georreferenciamento',
        'items' => [
            'Levantamento Planialtimétrico',
            'Levantamento Aerofotogramétrico',
            'Mapeamento Aéreo com Drone',
            'Ortofotos e Modelo Digital do Terreno (MDT)',
            'Cálculo de Áreas e Volumes',
            'Cubagem de Jazidas e frente de lavra',
            'Topografia de Mina e Topografia Rural',
        ],
    ],
];

$values = [
    'Compromisso com você',
    'Clareza e Transparência',
    'Responsabilidade Ambiental',
    'Parceria de Longo Prazo',
    'Confiança',
];

$process = [
    ['n' => '01', 'title' => 'Diagnóstico', 'text' => 'Análise técnica das necessidades e do contexto do projeto.'],
    ['n' => '02', 'title' => 'Planejamento', 'text' => 'Definição do escopo, prioridades e soluções mais adequadas.'],
    ['n' => '03', 'title' => 'Regularização', 'text' => 'Condução de processos, licenças e documentação junto aos órgãos competentes.'],
    ['n' => '04', 'title' => 'Execução', 'text' => 'Acompanhamento técnico, controle e suporte durante o desenvolvimento.'],
    ['n' => '05', 'title' => 'Resultados', 'text' => 'Entrega com foco em conformidade, continuidade e segurança operacional.'],
];

$clients = [
    ['src' => 'assets/img/placeholder.svg', 'alt' => 'Fortes Britas'],
    ['src' => 'assets/img/placeholder.svg', 'alt' => 'MDL Mineral Deposits Ltda'],
    ['src' => 'assets/img/placeholder.svg', 'alt' => 'MNX Mineração'],
    ['src' => 'assets/img/placeholder.svg', 'alt' => 'Minaoeste Indústria Extrativa'],
];

function iconSvg(string $name): string {
    $icons = [
        'document' => '<svg viewBox="0 0 64 64" aria-hidden="true"><path d="M16 8h25l9 9v39H16z"/><path d="M41 8v11h9M23 28h20M23 36h20M23 44h12"/><path d="M9 47l10-10 8 8-10 10H9z"/></svg>',
        'mine' => '<svg viewBox="0 0 64 64" aria-hidden="true"><path d="M8 48 31 16l9 12 8-9 8 29z"/><path d="m23 48 10-15 8 15M22 25l8 6 9-9"/></svg>',
        'leaf' => '<svg viewBox="0 0 64 64" aria-hidden="true"><path d="M54 10C30 10 15 20 11 39c-2 10 5 16 14 14 19-4 29-20 29-43Z"/><path d="M14 50c8-14 19-22 34-31"/></svg>',
        'drone' => '<svg viewBox="0 0 64 64" aria-hidden="true"><path d="M24 31h16l4 8H20zM28 31v-7h8v7M16 26h12M36 26h12M12 21h8M44 21h8"/><circle cx="10" cy="21" r="4"/><circle cx="54" cy="21" r="4"/><path d="M24 39 18 49M40 39l6 10M28 44h8"/></svg>',
    ];
    return $icons[$name] ?? '';
}
?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($config['company']) ?> | Mineração, Meio Ambiente e Geotecnologia</title>
    <meta name="description" content="Consultoria técnica em processos minerários, projetos de mina, licenciamento ambiental, topografia e georreferenciamento. Atendimento em todo o Brasil.">
    <meta name="theme-color" content="#0B4B38">
    <meta property="og:title" content="<?= htmlspecialchars($config['company']) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($config['tagline']) ?>">
    <meta property="og:type" content="website">
    <link rel="icon" href="assets/img/placeholder.svg">
    <link rel="stylesheet" href="assets/css/style.css?v=1.0">
</head>
<body>
<a class="skip-link" href="#conteudo">Ir para o conteúdo</a>
<header class="site-header" id="topo">
    <div class="container header-inner">
        <a href="#topo" class="brand" aria-label="Cassuli Consultoria - início">
            <img src="assets/img/placeholder.svg" alt="Cassuli Consultoria">
        </a>
        <button class="menu-toggle" type="button" aria-controls="main-nav" aria-expanded="false" aria-label="Abrir menu">
            <span></span><span></span><span></span>
        </button>
        <nav class="main-nav" id="main-nav" aria-label="Navegação principal">
            <a href="#topo" class="active">Início</a>
            <a href="#sobre">Sobre</a>
            <a href="#servicos">Serviços</a>
            <a href="#clientes">Clientes</a>
            <a href="#contato">Contato</a>
        </nav>
        <a class="btn btn-primary header-cta" href="<?= htmlspecialchars($waLink) ?>" target="_blank" rel="noopener">Fale com um especialista <span>→</span></a>
    </div>
</header>

<main id="conteudo">
    <section class="hero" aria-label="Apresentação">
        <div class="hero-bg" aria-hidden="true"></div>
        <div class="container hero-inner">
            <div class="hero-copy reveal">
                <p class="eyebrow">Conhecimento técnico. Resultados reais.</p>
                <h1>Consultoria técnica para <span>mineração, meio ambiente e geotecnologia.</span></h1>
                <p class="hero-text">Soluções especializadas para processos minerários, projetos de mina, licenciamento ambiental, topografia e georreferenciamento.</p>
                <div class="hero-actions">
                    <a class="btn btn-primary" href="<?= htmlspecialchars($waLink) ?>" target="_blank" rel="noopener">Fale com um especialista <span>→</span></a>
                    <a class="btn btn-outline-light" href="#servicos">Conheça nossos serviços <span>→</span></a>
                </div>
            </div>
            <div class="hero-badge reveal" aria-label="Atendimento nacional">
                <img src="assets/img/mapa-brasil.svg" alt="Mapa do Brasil" class="brazil-map">
                <p><strong>Atendimento em todo o Brasil,</strong><br>com a mesma dedicação e qualidade.</p>
            </div>
        </div>
    </section>

    <section class="section services" id="servicos">
        <div class="container">
            <div class="section-heading reveal">
                <p class="eyebrow dark">Especialidades</p>
                <h2>Nossos serviços</h2>
                <p>Soluções técnicas para diferentes etapas do seu projeto mineral e ambiental.</p>
            </div>
            <div class="service-grid">
                <?php foreach ($services as $service): ?>
                    <article class="service-card reveal">
                        <div class="service-icon"><?= iconSvg($service['icon']) ?></div>
                        <h3><?= htmlspecialchars($service['title']) ?></h3>
                        <ul>
                            <?php foreach ($service['items'] as $item): ?>
                                <li><?= htmlspecialchars($item) ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="#contato" class="text-link">Saiba mais <span>→</span></a>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section about" id="sobre">
        <div class="container about-grid">
            <div class="about-copy reveal">
                <p class="eyebrow dark">Sobre a Cassuli</p>
                <h2>Técnica, proximidade e segurança em cada etapa.</h2>
                <p>Na Cassuli Consultoria, nosso compromisso é estar ao lado do cliente. Trabalhamos para simplificar cada etapa dos processos de mineração e meio ambiente, oferecendo soluções práticas, seguras e personalizadas.</p>
                <p>Unimos experiência técnica com proximidade no atendimento, para que você tenha tranquilidade e resultados consistentes.</p>
                <a class="btn btn-primary" href="#contato">Conheça nossa atuação <span>→</span></a>
            </div>
            <div class="about-visual reveal" aria-hidden="true">
                <div class="geo-card">
                    <div class="geo-mark"></div>
                    <p>Mineração responsável.<br><strong>Decisões com base técnica.</strong></p>
                </div>
            </div>
            <div class="about-values reveal">
                <div class="mini-panel">
                    <div class="mini-icon">◉</div>
                    <div>
                        <h3>Nossa visão</h3>
                        <p>Ajudar empresas a crescer de forma sustentável, garantindo conformidade legal, eficiência produtiva e respeito ao meio ambiente.</p>
                    </div>
                </div>
                <div class="mini-panel values-list">
                    <div class="mini-icon">◇</div>
                    <div>
                        <h3>Nossos valores</h3>
                        <ul>
                            <?php foreach ($values as $value): ?><li><?= htmlspecialchars($value) ?></li><?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="process" aria-label="Processo de trabalho">
        <div class="container">
            <div class="process-head reveal">
                <div>
                    <p class="eyebrow light">Nosso processo de trabalho</p>
                    <h2>Da necessidade técnica ao resultado.</h2>
                    <p>Uma condução estruturada para reduzir riscos, apoiar decisões e manter o projeto em conformidade.</p>
                </div>
                <div class="process-callout">Mineração responsável<br>e desenvolvimento<br>sustentável</div>
            </div>
            <div class="process-track">
                <?php foreach ($process as $i => $step): ?>
                    <article class="process-step reveal">
                        <div class="process-number"><?= htmlspecialchars($step['n']) ?></div>
                        <h3><?= htmlspecialchars($step['title']) ?></h3>
                        <p><?= htmlspecialchars($step['text']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section clients" id="clientes">
        <div class="container">
            <div class="section-heading align-left reveal">
                <p class="eyebrow dark">Relacionamento</p>
                <h2>Nossos clientes</h2>
                <p>Empresas que confiam no nosso trabalho.</p>
            </div>
            <div class="client-grid reveal">
                <?php foreach ($clients as $client): ?>
                    <div class="client-logo"><img src="<?= htmlspecialchars($client['src']) ?>" alt="<?= htmlspecialchars($client['alt']) ?>" loading="lazy"></div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="cta-strip" id="contato">
        <div class="container cta-inner">
            <div class="cta-copy reveal">
                <span class="cta-symbol" aria-hidden="true">✦</span>
                <div>
                    <h2>Seu projeto precisa de suporte técnico?</h2>
                    <p>Converse com a Cassuli e encontre a solução adequada para a sua operação.</p>
                </div>
            </div>
            <a class="btn btn-light" href="<?= htmlspecialchars($waLink) ?>" target="_blank" rel="noopener">Solicitar atendimento <span>→</span></a>
        </div>
    </section>

    <section class="contact-section">
        <div class="container contact-grid">
            <div class="contact-intro reveal">
                <p class="eyebrow dark">Contato</p>
                <h2>Vamos conversar sobre o seu projeto.</h2>
                <p>Envie uma mensagem pelo formulário ou fale diretamente com a equipe pelo WhatsApp.</p>
                <div class="contact-list">
                    <a href="tel:+5500000000000"><strong>Telefone / WhatsApp</strong><span><?= htmlspecialchars($config['phone_display']) ?></span></a>
                    <a href="mailto:<?= htmlspecialchars($config['email']) ?>"><strong>E-mail</strong><span><?= htmlspecialchars($config['email']) ?></span></a>
                    <a href="<?= htmlspecialchars($config['instagram_url']) ?>" target="_blank" rel="noopener"><strong>Instagram</strong><span><?= htmlspecialchars($config['instagram']) ?></span></a>
                    <div><strong>Endereço</strong><span><?= htmlspecialchars($config['address']) ?></span></div>
                </div>
            </div>
            <form class="contact-form reveal" action="send.php" method="post">
                <div class="field-row">
                    <label>Nome
                        <input type="text" name="name" required autocomplete="name" placeholder="Seu nome">
                    </label>
                    <label>Empresa
                        <input type="text" name="company" autocomplete="organization" placeholder="Nome da empresa">
                    </label>
                </div>
                <div class="field-row">
                    <label>Telefone
                        <input type="tel" name="phone" required autocomplete="tel" placeholder="(00) 00000-0000">
                    </label>
                    <label>Serviço
                        <select name="service">
                            <option value="Processos Minerários / ANM">Processos Minerários / ANM</option>
                            <option value="Projetos de Mina">Projetos de Mina</option>
                            <option value="Licenciamento Ambiental">Licenciamento Ambiental</option>
                            <option value="Topografia e Georreferenciamento">Topografia e Georreferenciamento</option>
                            <option value="Outro">Outro</option>
                        </select>
                    </label>
                </div>
                <label>Como podemos ajudar?
                    <textarea name="message" rows="5" required placeholder="Conte brevemente sobre a sua necessidade"></textarea>
                </label>
                <input type="text" name="website" class="honeypot" tabindex="-1" autocomplete="off" aria-hidden="true">
                <button class="btn btn-primary" type="submit">Enviar pelo WhatsApp <span>→</span></button>
                <p class="form-note">Ao enviar, você será direcionado ao WhatsApp com a mensagem preenchida.</p>
            </form>
        </div>
    </section>
</main>

<footer class="site-footer">
    <div class="container footer-grid">
        <div class="footer-brand">
            <div class="footer-logo-wrap"><img src="assets/img/placeholder.svg" alt="Cassuli Consultoria"></div>
            <p>Mineração • Meio Ambiente • Geotecnologia</p>
        </div>
        <div class="footer-contact">
            <a href="tel:+5500000000000"><?= htmlspecialchars($config['phone_display']) ?></a>
            <a href="mailto:<?= htmlspecialchars($config['email']) ?>"><?= htmlspecialchars($config['email']) ?></a>
            <span><?= htmlspecialchars($config['address']) ?></span>
        </div>
        <div class="footer-social">
            <strong>Redes sociais</strong>
            <a href="<?= htmlspecialchars($config['instagram_url']) ?>" target="_blank" rel="noopener"><?= htmlspecialchars($config['instagram']) ?></a>
        </div>
        <div class="footer-motto">Conhecimento que gera oportunidades</div>
    </div>
    <div class="container footer-bottom">
        <span>© <?= date('Y') ?> Cassuli Consultoria. Todos os direitos reservados.</span>
        <div><a href="privacidade.php">Política de Privacidade</a><a href="termos.php">Termos de Uso</a></div>
    </div>
</footer>

<a class="floating-whatsapp" href="<?= htmlspecialchars($waLink) ?>" target="_blank" rel="noopener" aria-label="Falar com a Cassuli pelo WhatsApp">WA</a>
<script src="assets/js/main.js?v=1.0"></script>
</body>
</html>
