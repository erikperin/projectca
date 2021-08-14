<?php       session_start(); ?>

<!DOCTYPE html>
<html>

<head>
  <title>Maior Conferência de Contabilidade e Tecnologia da América Latina - Conta Azul</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/brand/favicon.ico" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.2/dist/css/uikit.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.2/dist/js/uikit.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.2/dist/js/uikit-icons.min.js"></script>
  <link rel="stylesheet" href="src/css/custom.css" />
  <meta property="og:locale" content="pt_BR" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Maior Conferência de Contabilidade e Tecnologia da América Latina" />
  <meta property="og:description" content="Para contadores de olho no futuro, a ContaAzul realiza um evento nacional sobre as oportunidades e tendências do mercado contábil." />
  <meta property="og:url" content="https://contaazul.com" />
  <meta property="og:site_name" content="Conta Azul" />
  <meta property="og:image" content="https://contaazul-site-uploads.s3.amazonaws.com/uploads/2018/05/contaazul-site-home-nova.jpg" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="600" />
  <meta name="twitter:card" content="summary" />
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script>
    function validateForm() {
      let nomeinput = document.forms["formlead"]["nome"].value;
      let emailinput = document.forms["formlead"]["email"].value;
      let aceiteinput = document.forms["formlead"]["aceite"].value;
      if (nomeinput == "") {
        UIkit.notification({
          message: 'Ei, faltou nos premiar com seu belo nome...',
          status: 'danger'
        })
        document.getElementById("nome").classList.add("errorform");
        return false;
      } else {
        document.getElementById("nome").classList.remove("errorform");
      }
      if (emailinput == "") {
        UIkit.notification({
          message: 'Ei, faltou nos brindar com seu valioso email...',
          status: 'danger'
        })
        document.getElementById("email").classList.add("errorform");
        return false;
      } else {
        document.getElementById("email").classList.remove("errorform");
      }
      if (aceiteinput == "") {
        UIkit.notification({
          message: 'Precisamos que você concorde com os termos...',
          status: 'danger'
        })
        return false;
      }
    }
    function onSubmit(token) {
      document.getElementById("formlead").submit();
    }
  </script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-204973509-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-204973509-1');
  </script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Event",
      "name": "Maior Conferência de Contabilidade e Tecnologia da América Latina",
      "startDate": "2025-07-21T19:00-05:00",
      "endDate": "2025-07-21T23:00-05:00",
      "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
      "eventStatus": "https://schema.org/EventScheduled",
      "location": {
        "@type": "Place",
        "name": "Auditório da ContaAzul",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "Av. das Nações Unidas, 12551 - Brooklin",
          "addressLocality": "São Paulo",
          "postalCode": "04533-085",
          "addressRegion": "SP",
          "addressCountry": "BR"
        }
      },
      "image": [
        "https://#domain#assets/lands/hero.jpg",
        "https://#domain#assets/lands/hero.jpg",
        "https://#domain#assets/lands/hero.jpg"
      ],
      "description": "Para contadores de olho no futuro, a ContaAzul realiza um evento nacional
      sobre as oportunidades e tendências do mercado contábil.
      ",
      "offers": {
        "@type": "Offer",
        "url": "https://#domain#",
        "price": "FREE",
        "priceCurrency": "BRL",
        "availability": "https://schema.org/InStock",
        "validFrom": "2024-05-21T12:00"
      },

      "organizer": {
        "@type": "Organization",
        "name": "ContaAzul",
        "url": "https://contaazul.com/"
      }
    }
  </script>
  <!-- Hotjar Tracking Code for https://ca.oktopus.cloud -->
  <script>
    (function(h, o, t, j, a, r) {
      h.hj = h.hj || function() {
        (h.hj.q = h.hj.q || []).push(arguments)
      };
      h._hjSettings = {
        hjid: 2554049,
        hjsv: 6
      };
      a = o.getElementsByTagName('head')[0];
      r = o.createElement('script');
      r.async = 1;
      r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
      a.appendChild(r);
    })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
  </script>
</head>

<body <?php   if(!isset($_SESSION["sessao"])){ ?>
  onload="UIkit.notification('<small>Ao utilizar este site, você concorda com o uso de cookies conforme descrito em nossa Política de Privacidade.</small>',
  {  status: 'primary',pos: 'bottom-center',
    timeout: 10000 });" <?php } ?>>
  <div class="uk-background-primary uk-background-fixed uk-background-cover uk-light uk-padding uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url('assets/lands/hero.jpg');" uk-height-viewport="offset-bottom: 15">
    <div class="uk-container uk-container-small uk-text-center" uk-scrollspy="target: > div; cls: uk-animation-fade; delay: 500">
      <a class="uk-logo " href="">
        <img src="assets/brand/logo_branca.svg" uk-svg>
      </a>
      <?php   if(isset($_SESSION["sessao"])){   //valida exibição pós envio de form  ?>
      <div class="uk-margin-large-top">
        <h1>Obrigado <?php echo $_SESSION["sessao"]; ?> por se inscrever,<br class="uk-visible@m"> em breve receberá novidades!</h1>
        <p>Compartilhe essa página com amigos para atenderem ao evento com você. </p>
        <p uk-margin>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://<?php echo $_SERVER[HTTP_HOST]; ?>" class="uk-button uk-button-default uk-border-rounded"><span uk-icon="icon: facebook"></span> Compartilhar</a>
          <a href="https://www.linkedin.com/sharing/share-offsite/?url=https://<?php echo $_SERVER[HTTP_HOST]; ?>" class="uk-button uk-button-default uk-border-rounded"><span uk-icon="icon: linkedin"></span> Compartilhar</a>
        </p>
      </div> <?php  }else{ ?>
      <div class="uk-margin-large-top">
        <h1>Um evento que vai marcar o mercado.<br>Seja o primeiro a saber de tudo.</h1>
        <p>Para contadores de olho no futuro, a ContaAzul realiza um evento nacional <br class="uk-visible@m">sobre as oportunidades e tendências do mercado contábil.</p>
      </div>
      <div class="uk-margin-large-top">
        <form name="formlead" id="formlead" action="send.php" method="POST" onsubmit="return validateForm()">
          <div class="uk-margin ">
            <input class="uk-input   uk-width-1-2@m uk-border-rounded" type="text" name="nome" id="nome" placeholder="Digite seu nome" autocomplete="off">
          </div>
          <input type="hidden" name="melzinho" autocomplete="off">
          <div class="uk-margin">
            <input class="uk-input uk-width-1-2@m uk-border-rounded" type="email" name="email" id="email" placeholder="Digite seu melhor email" autocomplete="off">
          </div>
          <div class="uk-margin"> <label> <input class="uk-checkbox uk-border-rounded" name="aceite" type="checkbox" required> Eu concordo com a <a href="https://contaazul.com/politica/" target="_blank">Política de Privacidade</a></label> </div>
          <div class="g-recaptcha" data-sitekey="6LeG2_cbAAAAAAU9oB0NODsNXJcTSxOprXYbYSGl" data-callback="onSubmit" data-size="invisible">
          </div>
          <div class="uk-margin">
            <button class="uk-button uk-button-primary uk-border-rounded ">Me Avise</button>
          </div>
        </form>
      </div>   <?php  }  ?>
    </div>
  </div>
  <div class="uk-padding-large uk-panel" uk-scrollspy="target: > div; cls: uk-animation-fade; delay: 500">
    <div class="uk-container uk-container-small uk-text-center">
      <h2 class="uk-text-primary">Sua empresa precisa de controle financeiro?<br>Centralize tudo em um único sistema</h2>
    </div>
    <div class="uk-container uk-container-default uk-text-center uk-margin-large-top">
      <div class="uk-grid-divider uk-child-width-1-3@s  " uk-scrollspy="target: > div; cls: uk-animation-fade; delay: 500" uk-grid>
        <div>
          <div class="uk-card uk-card-hover uk-card-body">
            <img width="80" src="assets/icons/contasapagar.svg">
            <h4 class="uk-h4 uk-text-primary ">Contas a pagar e a receber</h4>
            <p>Matenha as contas a pagar e a receber sempre atualizadas.</p>
          </div>
        </div>
        <div>
          <div class="uk-card uk-card-hover uk-card-body">
            <img width="80" src="assets/icons/notafiscal.svg">
            <h4 class="uk-h4 uk-text-primary ">Nota fiscal de produto e serviço</h4>
            <p>Emissor de nota fiscal integrado com o processo de vendas.</p>
          </div>
        </div>
        <div>
          <div class="uk-card uk-card-hover uk-card-body">
            <img width="80" src="assets/icons/boleto.svg">
            <h4 class="uk-h4 uk-text-primary ">Boleto de cobrança</h4>
            <p>Emita e envie boletos registrados para os clientes em poucos segundos.</p>
          </div>
        </div>
      </div>
      <hr>
      <div class="uk-grid-divider uk-child-width-1-3@s" uk-scrollspy="target: > div; cls: uk-animation-fade; delay: 550" uk-grid>
        <div>
          <div class="uk-card uk-card-hover uk-card-body">
            <img width="80" src="assets/icons/fluxodecaixa.svg">
            <h4 class="uk-h4 uk-text-primary ">Fluxo de caixa diário e mensal</h4>
            <p>Movimentações de entradas e saídas, geração de caixa e o saldo do caixa por período.</p>
          </div>
        </div>
        <div>
          <div class="uk-card uk-card-hover uk-card-body">
            <img width="80" src="assets/icons/notafiscal.svg">
            <h4 class="uk-h4 uk-text-primary ">Integração bancária</h4>
            <p>A integração bancária sincroniza lançamentos do ContaAzul com seu banco.</p>
          </div>
        </div>
        <div>
          <div class="uk-card uk-card-hover uk-card-body">
            <img width="80" src="assets/icons/integracao_contabil.svg">
            <h4 class="uk-h4 uk-text-primary ">Integração contábil</h4>
            <p>Gaste menos tempo com a burocracia contábil. Envie seus documentos digitalmente e interaja de forma ágil com o contador.</p>
          </div>
        </div>
      </div>
      <hr>
      <div class="uk-grid-divider uk-child-width-1-3@s" uk-scrollspy="target: > div; cls: uk-animation-fade; delay: 550" uk-grid>
        <div>
          <div class="uk-card uk-card-hover uk-card-body">
            <img width="80" src="assets/icons/conciliacao.svg">
            <h4 class="uk-h4 uk-text-primary ">Conciliação bancária</h4>
            <p>Economize até 20h por mês com a Conciliação Bancária do ContaAzul.</p>
          </div>
        </div>
        <div>
          <div class="uk-card uk-card-hover uk-card-body">
            <img width="80" src="assets/icons/faturamentoporcliente.svg">
            <h4 class="uk-h4 uk-text-primary ">Faturamento por cliente</h4>
            <p>A integração bancária sincroniza lançamentos do ContaAzul com seu banco.</p>
          </div>
        </div>
        <div>
          <div class="uk-card uk-card-hover uk-card-body">
            <img width="80" src="assets/icons/dre.svg">
            <h4 class="uk-h4 uk-text-primary ">DRE gerencial</h4>
            <p>Relatório de receitas, custos e despesas para entender a saúde financeira da empresa.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="uk-padding uk-panel uk-background-muted" uk-scrollspy="target: > div; cls: uk-animation-fade; delay: 500">
    <div class="uk-container uk-container-default uk-text-center ">
      <div uk-grid>
        <div class="uk-width-auto@m"> <img width="100" src="assets/brand/logo_azul.svg"></div>
        <div class="uk-width-expand@m uk-text-small uk-text-muted">© 2021 Direitos Reservados - <a href="https://contaazul.com/termos/">Termos de Uso</a> - <a href="https://contaazul.com/politica/">Política de Privacidade</a></div>
        <div class="uk-width-auto@m uk-text-center">
          <div class="uk-grid uk-child-width-auto uk-text-center uk-flex-center" uk-grid>
            <div><a href="https://www.instagram.com/contaazul" target="_blank" uk-icon="icon: instagram"></a></div>
            <div><a href="https://facebook.com/ContaAzul" uk-icon="icon: facebook" target="_blank"></a></div>
            <div><a href="https://twitter.com/ContaAzul" uk-icon="icon: twitter" target="_blank"></a></div>
            <div><a href="https://www.linkedin.com/company/contaazul" uk-icon="icon: linkedin" target="_blank"></a></div>
            <div><a href="https://youtube.com/ContaAzulTV" uk-icon="icon: youtube" target="_blank"></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>
