<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="/assets/img/drop-bold.svg" type="image/x-icon">
  <link rel="stylesheet" href="/assets/css/index.css" />
  <?php loadCss($nomeCss) ?>
  <link rel="stylesheet" href="/assets/css/menssagem.css" />
  <link rel="stylesheet" href="/assets/css/comum.css" />
  <link rel="stylesheet" href="/assets/css/fonts/style.css">
  <link rel="stylesheet" href="/assets/css/modal.css">
  <title>HydroFlow</title>
</head>

<body>
  <nav class="nav-bar">
    <input type="checkbox" class="nav-toggle" id="nav-toggle" />
    <div class="nav-header">
      <a href="#" class="nav-title">Hydr<i class="ph-bold ph-drop"></i>Flow</a>
      <label for="nav-toggle"><span class="nav-toggle-burger"></span></label>
      <hr />
    </div>
    <div class="nav-content">
      <a href="painel_controle.php" class="nav-button">
        <i class="icon ph-bold ph-faders"></i><span>Painel de Controle</span>
      </a>
      <a href="registros_jardim.php" class="nav-button">
        <i class="icon ph-bold ph-potted-plant"></i><span>Jardim</span>
      </a>
      <a href="registros_dispositivo.php" class="nav-button">
        <i class="icon ph-bold ph-circuitry"></i><span>Dispositivos</span>
      </a>
      <a href="parametros.php" class="nav-button">
        <i class="icon ph-bold ph-faders-horizontal"></i><span>Parâmetros</span>
      </a>
      <a href="" class="nav-button">
        <i class="icon ph-bold ph-chart-line"></i><span>Gráficos</span>
      </a>
      <div class="nav-content-highlight"></div>
    </div>
    <input type="checkbox" id="nav-footer-toggle" class="nav-footer-toggle" />
    <div class="nav-footer">
      <div class="nav-footer-heading">
        <div class="nav-footer-avatar">
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
            y="0px" viewBox="0 0 256 256" enable-background="new 0 0 256 256" xml:space="preserve">
            <metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata>
            <g>
              <g>
                <g>
                  <path fill="#000000"
                    d="M119.1,22c-42.9,3.2-80.9,29.7-98.7,69c-4.6,10.1-7.7,20.7-9.5,32.8c-1.1,7.1-1.1,24.9,0,32.1c4.3,28.4,16.6,51.8,37.6,71.3c3.9,3.6,8.5,7.2,8.8,7c0.1-0.1,0.8-2.9,1.6-6.2c3.6-14.5,6.2-22.3,8.2-24.4c2.3-2.4,14.4-5.9,29.1-8.5c9.5-1.6,9.5-1.6,9.5-2.3c0-0.3,1-1.5,2.2-2.7l2.2-2.1l0-6.1c0-3.3-0.1-7-0.1-8.1l0-2l-3.1-1.4c-4.7-2.2-10.5-6.3-11.8-8.3c-3.2-4.9-6.6-13.4-8.7-22c-0.8-3.1-1.4-6.1-1.4-6.7c0-0.6-0.9-2.1-2.1-3.5c-4.3-5-5.1-12.5-2.2-18.6l1.5-3V95.7c0-9.5,0.2-13.4,0.7-15.6c3.2-13.4,14.9-23.2,34.5-28.7c8.2-2.3,12.7-2.3,20.9,0c18.1,5.1,29.5,14,33.8,26.3c1,2.8,1.1,3.8,1.2,16.8c0.1,13.8,0.1,13.8,1.3,15.5c3.8,5.7,3,15.5-1.8,20.4c-1.3,1.3-1.6,2.3-2.5,6.9c-1.4,6.9-3.8,14.1-6.7,20c-3.2,6.5-5.1,8.3-13.9,12.8l-3.9,2l-0.1,7.9l-0.1,7.8l2.3,2.3c1.3,1.3,2.3,2.5,2.3,2.9c0,0.3,0.7,0.7,1.5,0.8c24.5,4.2,35,7.2,37.8,10.7c1.2,1.5,4.6,11.9,7.1,21.9c1.1,4.4,2.1,8,2.3,8c0.8,0,9.6-7.9,14.4-12.8c36.7-37.9,43.4-96.5,16.3-141.9c-12.6-21.1-31.1-37.6-53.6-47.7C158.9,24.3,137.9,20.6,119.1,22z" />
                </g>
              </g>
            </g>
          </svg>
        </div>
        <div class="nav-footer-titlebox">
          <span class="nav-footer-title">usuário</span>
          <span class="nav-footer-subtitle">Admin</span>
        </div>
        <label for="nav-footer-toggle"><i class="icon ph-bold ph-caret-up"></i></label>
      </div>
      <div class="nav-footer-content">
        <div class="btn-logout">
          <a href="logout.php"><i class="icon ph-bold ph-sign-out"></i>Sair</a>
        </div>
      </div>
    </div>
  </nav>