<?php

define("TITULO", "Cotação");
define("DESCRIPTION", "Nós trabalhamos desde 1998 com máquinas a laser para gravação, solda a laser  e corte a laser, a nossa equipe pode dimensionar o melhor equipamento para que você tenha uma produtividade inigualável.");
define("KEYWORDS", "");

require 'includes/funcoes.php';
require 'includes/head.php';

echo $focus->CSS();

?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

<body>

  <?php require 'includes/topo.php'; ?>

  <main>

    <div class="faixa-pgs">
      <div class="container">
        <div class="faixa-pgs__content">
          <?php echo $focus->breadcrumb([TITULO]) ?>
          <h1>
            <?php echo TITULO ?>
          </h1>
        </div>
      </div>
    </div>

    <div class="cotacao default pb-5 quote">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mb-4">
            <section class="quote__card" aria-labelledby="titulo-carrinho">
              <h2 id="titulo-carrinho" class="quote__title">Produtos da cotação</h2>
              <?php if (!empty(Carrinho::getAll())) { ?>
                <div class="carrinho quote__table-wrap">
                  <table class="table quote__table quote__table--cart">
                    <thead>
                      <tr>
                        <th>
                          <strong>#</strong>
                        </th>
                        <th>
                          &nbsp;
                        </th>
                        <th>
                          <strong>Nome</strong>
                        </th>
                        <th>
                          <strong>Quantidade</strong>
                        </th>
                        <th>
                          <strong>Dimensões</strong>
                        </th>
                        <th>
                          <strong>Espessura</strong>
                        </th>
                        <th>
                          <strong>Cor</strong>
                        </th>
                        <th>
                          <strong>Valor</strong>
                        </th>
                        <th>
                          &nbsp; - &nbsp;
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $index = 1;
                      foreach (Carrinho::getAll() as $key => $item) { ?>
                        <tr>
                          <td>
                            <?= $index ?>
                          </td>
                          <td>
                            <a href="<?php echo URL . $item["link"] ?>" title="<?php echo $item["nome"] ?>">
                              <img src="<?php echo URL_IMAGENS . "produtos/" . $item["link"] .  "/thumb/1.png" ?>" alt="<?php echo $item["nome"] ?>">
                            </a>
                          </td>
                          <td class="carrinho__item-title">
                            <a href="<?php echo URL . $item["link"] ?>" title="<?php echo $item["nome"] ?>">
                              <?= $item["nome"] ?>
                            </a>
                          </td>
                          <td>
                            <?= $item["quantidade"] ?>
                          </td>
                          <td>
                            <?= $item["tamanho"] ?>
                          </td>
                          <?php if (array_key_exists("espessura", $item)) { ?>
                            <td>
                              <?= $item["espessura"] ?>
                            </td>
                          <?php } else { ?>
                            <td>
                              -:-
                            </td>
                          <?php } ?>
                          <td>
                            <?= $item["cor"] ?>
                          </td>
                          <td class="d-none">
                            <?= $item["valor"] ?>
                          </td>
                          <td>
                            <button class="btn-remove-cart" data-id="<?= $item["unique_key"] ?>" type="button">
                              <i class="fas fa-times"></i>
                            </button>
                          </td>
                        </tr>
                      <?php
                        $index++;
                      } ?>
                    </tbody>
                  </table>
                </div>
              <?php }  ?>
              <div class="quote__toolbar">
                <h3 class="quote__section-title">Adicionar produtos</h3>
                <button id="adicionar-produto" class="quote__button quote__button--outline" type="button"><i class="fas fa-plus" aria-hidden="true"></i> Adicionar mais produtos</button>
              </div>
              <div class="tabela-responsiva quote__table-wrap">
                <table class="quote__table">
                  <thead id="produtos-thead">
                    <tr>
                      <th>TIPO</th>
                      <th>MATERIAL</th>
                      <th>ESPESSURA</th>
                      <th>TAMANHO <br> (LxA) </th>
                      <th>COR</th>
                      <th>QUANTIDADE</th>
                      <!-- <th>PREÇO</th> -->
                      <th>
                        -:-
                      </th>
                    </tr>
                  </thead>
                  <tbody id="produtos-tbody">
                  </tbody>
                </table>
              </div>
            </section>

          </div>
          <div class="col-lg-12">
            <form id="form-cotacao" class="quote__card quote__card--form">
              <h2 class="quote__title">Dados para contato</h2>

              <div class="row" style="gap: 20px 0;">
                <div class="col-lg-4 col-md-6">
                  <div class="form-group quote__field">
                    <input type="text" class="form-control quote__input" name="nome" placeholder="Seu nome" autocomplete="name">
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="form-group quote__field">
                    <input type="email" class="form-control quote__input" name="email" placeholder="Seu e-mail" autocomplete="email">
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="form-group quote__field">
                    <input type="text" class="form-control quote__input mask-telefone" name="telefone" placeholder="(00) 00000-0000" autocomplete="tel">
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="form-group quote__field">
                    <input type="text" class="form-control quote__input" name="cep" id="campoCep" placeholder="CEP: 00000-000" autocomplete="postal-code">
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="form-group quote__field">
                    <input type="text" class="form-control quote__input" name="numero" placeholder="Número" autocomplete="address-line2">
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="form-group quote__field">
                    <input id="cpf-cnpj" type="text" class="form-control quote__input" name="CPF/CNPJ" placeholder="CPF/CNPJ">
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="form-group quote__field">
                    <label for="arquivo" id="arquivo-label" class="quote__upload">
                      Anexar arquivo
                    </label>
                    <input type="file" class="" name="arquivo[]" id="arquivo" hidden>
                  </div>
                </div>
              </div>
              <div class="g-recaptcha mb-3" data-sitekey="6LeYnCQqAAAAAPbJeeETsky2FplYjExbJoCW9mNG"></div>
              <button class="btn-orcamento btn-envia quote__button quote__button--primary quote__button--wide" type="submit">Fazer orçamento</button>
            </form>
          </div>
        </div>
      </div>
    </div>

  </main>

  <?php echo $focus->JS(); ?>
  <?php require 'includes/footer.php'; ?>

  <script>
    $("#arquivo").on("change", () => {
      if ($("#arquivo")[0].files.length !== 0) {
        $("#arquivo-label").addClass("upload");
        $("#arquivo-label").html("Arquivo Anexado");
      } else {
        $("#arquivo-label").removeClass("upload");
        $("#arquivo-label").html("Anexar arquivo");
      }
    });
  </script>

  <script>
    function getUniqueValues(array, key) {
      const values = array.reduce((acc, item) => {
        if (item[key]) {
          if (Array.isArray(item[key])) {
            acc.push(...item[key]);
          } else {
            acc.push(item[key]);
          }
        }
        return acc;
      }, []);
      return [...new Set(values)];
    }
    /* adicionar linhas dinamicas */
    let loading = true;

    let produtos_dinamicos = [];
    let indice = 0;

    $("#adicionar-produto").click(function(event) {
      event.preventDefault();
      adicionarLinha();
    });

    $(document).ready(function() {
      adicionarLinha();
      pegarMaterialDinamico("chapa", 0);
    });

    function adicionarLinha() {
      /*
      			$("#produtos-tbody").empty(); */
      const html = `
            <tr class="quote__product-row" data-id-row="linha-${indice}">
                <td>
                    <select name="" class="quote__select selecionar_tipo-dinamico" data-indice-select="${indice}" aria-label="Tipo do produto">
                        <option value="chapa">CHAPA</option>
                        <option value="tarugo">TARUGO</option>
                        <option value="cortina">CORTINA</option>
                        <option value="acessorios">ACESSÓRIOS</option>
                        <option value="fita">FITA</option>
                    </select>
                </td>
                <td>
                    <select name="b" class="quote__select select-dinamico_material dinamico-${indice}_material" data-indice-select="${indice}" aria-label="Material" disabled></select>
                </td>
                <td>
                    <select name="a" class="quote__select select-dinamico_espessura dinamico-${indice}_espessura" data-indice-select="${indice}" aria-label="Espessura" disabled></select>
                </td>
                <td>
                    <select name="d" class="quote__select select-dinamico_tamanho dinamico-${indice}_tamanho" data-indice-select="${indice}" aria-label="Tamanho" disabled></select>
                </td>
                <td>
                    <select name="d" class="quote__select select-dinamico_cor dinamico-${indice}_cor" data-indice-select="${indice}" aria-label="Cor" disabled></select>
                </td>
								<td>
									<input class="quote__quantity dinamico-${indice}_quantidade" type="number" name="quantidade" min="1" max="99" value="1" aria-label="Quantidade" disabled>
								</td>

								<td>
									<button class="quote__remove btn-remove-row-dinamic" type="button" data-remove-row="${indice}" aria-label="Remover produto">
										<i class="fas fa-trash-alt"></i>
									</button>
								</td>
            </tr>
        `;

      $("#produtos-tbody").append(html);
      indice++;

    }

    $("#produtos-tbody").on("change", ".selecionar_tipo-dinamico", function(event) {
      event.preventDefault();

      const indice_selecionado = $(this).data("indice-select");
      const tipo = $(this).val();


      $(`.dinamico-${indice_selecionado}_material`).empty().attr("disabled", true);
      $(`.dinamico-${indice_selecionado}_espessura`).empty().attr("disabled", true);
      $(`.dinamico-${indice_selecionado}_tamanho`).empty().attr("disabled", true);
      $(`.dinamico-${indice_selecionado}_cor`).empty().attr("disabled", true);
      $(`.valor-${indice_selecionado}`).text("");

      pegarMaterialDinamico(tipo, indice_selecionado);
    });

    async function pegarMaterialDinamico(tipo_selecionado, indice_selecionado) {

      $(`.dinamico-${indice_selecionado}_material`).removeAttr("disabled");

      try {
        const response = await fetch(`includes/catalogo.php?tipo=${tipo_selecionado}`, {
          method: "GET"
        });

        if (!response.ok) {
          throw new Error('Network response was not ok');
        }

        const data = await response.json();
        renderizarMateriaisDinamicamente(data, indice_selecionado);

      } catch (error) {
        console.error('Houve um problema com a solicitação:', error);
        alert('Houve um problema com a solicitação: ' + error.message);
      }
    }

    function renderizarMateriaisDinamicamente(produtos_dinamicos, indice_selecionado) {
      const mapa = new Map(Object.entries(produtos_dinamicos));

      let html = "";

      var index = 0;
      html += `<option value="null"> - Selecionar - </option>`;
      mapa.forEach((value, key) => {
        html += `<option value="${key}">${value}</option>`;
        index++;
      });
      $(`.dinamico-${indice_selecionado}_material`).html(html);
    }

    $("#produtos-tbody").on("change", ".select-dinamico_material", function(event) {
      event.preventDefault();
      const indice_selecionado = $(this).data("indice-select");
      const material = $(this).val();

      pegarProdutoDinamicamente(material, indice_selecionado);

    });

    function tipoDaLinha(indice_selecionado) {
      const linha = document.querySelector(`.dinamico-${indice_selecionado}_material`)?.closest("tr");
      const tipoEl = linha ? linha.querySelector(".selecionar_tipo-dinamico") : null;
      return tipoEl ? tipoEl.value : null;
    }

    $("#produtos-tbody").on("change", ".select-dinamico_espessura", function(event) {
      event.preventDefault();

      const indice_selecionado = $(this).data("indice-select");
      const espessura = $(this).val();

      $(`.dinamico-${indice_selecionado}_tamanho`).empty().attr("disabled", true);
      $(`.dinamico-${indice_selecionado}_cor`).empty().attr("disabled", true);
      $(`.valor-${indice_selecionado}`).empty();

      atualizarTamanhosDinamicamente(indice_selecionado);
    });

    $("#produtos-tbody").on("change", ".select-dinamico_tamanho", function(event) {
      event.preventDefault();

      const indice_selecionado = $(this).data("indice-select");
      const tamanho = $(this).val();

      atualizarCoresDinamicamente(indice_selecionado);
    });

    async function pegarProdutoDinamicamente(chave_principal, indice_selecionado) {
      try {

        if (document.querySelector(`.dinamico-${indice_selecionado}_material`).value === "false") {
          $(`.dinamico-${indice_selecionado}_espessura`).empty().attr("disabled", true);
          $(`.dinamico-${indice_selecionado}_tamanho`).empty().attr("disabled", true);
          $(`.dinamico-${indice_selecionado}_cor`).empty().attr("disabled", true);
          $(`.dinamico-${indice_selecionado}_quantidade`).attr("disabled", true);
          /* $(`.valor-${indice_selecionado}`).empty(); */
          throw new Error("Seleciona um material válido!");
        }

        const forma = tipoDaLinha(indice_selecionado);
        const formaParam = forma ? `&forma=${forma}` : '';

        const response = await fetch(`includes/catalogo.php?variantes=${chave_principal}${formaParam}`, {
          method: "GET"
        });

        if (!response.ok) {
          throw new Error('Network response was not ok');
        }

        const variantes = await response.json();
        produtos_dinamicos = variantes;

        renderizarEspessurasDinamicamente(variantes, indice_selecionado);
      } catch (error) {
        console.error('Houve um problema com o produto:', error);
        alert('Houve um problema com o produto: ' + error.message);
      }
    }

    function renderizarEspessurasDinamicamente(produtos_dinamicos, indice_selecionado) {
      // Limpar tamanhos e cores
      if (document.querySelector(`.dinamico-${indice_selecionado}_tamanho`).value.length > 0) {
        $(`.dinamico-${indice_selecionado}_tamanho`).empty();
        $(`.dinamico-${indice_selecionado}_cor`).empty();
        /* $(`.valor-${indice_selecionado}`).empty(); */
      }

      const uniqueEspessuras = getUniqueValues(produtos_dinamicos, 'espessura');

      if (uniqueEspessuras.length === 0) {

        const selectEspessuras = document.querySelector(`.dinamico-${indice_selecionado}_espessura`);
        selectEspessuras.innerHTML = '';
        selectEspessuras.disabled = true;
        atualizarTamanhosDinamicamente(indice_selecionado); // Avançar para o próximo select
        /* atualizarCoresDinamicamente(indice_selecionado); // Avançar para o próximo select */
      } else {
        renderOptionsDinamicamente(`.dinamico-${indice_selecionado}_espessura`, uniqueEspessuras);
        atualizarTamanhosDinamicamente(indice_selecionado);
        document.querySelector(`.dinamico-${indice_selecionado}_espessura`).disabled = false;

        if (uniqueEspessuras.length === 1) {
          document.querySelector(`.dinamico-${indice_selecionado}_espessura`).selectedIndex = 0;
          atualizarTamanhosDinamicamente(indice_selecionado);
          atualizarCoresDinamicamente(indice_selecionado); // Avançar para o próximo select
        }
      }
    }

    async function atualizarTamanhosDinamicamente(indice_selecionado) {

      try {

        if (document.querySelector(`.dinamico-${indice_selecionado}_cor`).value.length > 0) {
          $(`.dinamico-${indice_selecionado}_cor`).empty();
          /* $(`.valor-${indice_selecionado}`).empty(); */
        }

        let espessura;
        const key = document.querySelector(`.dinamico-${indice_selecionado}_material`).value;
        let url = `includes/catalogo.php?encontrarTamanho=1&key=${key}`;

        if (document.querySelector(`.dinamico-${indice_selecionado}_espessura`)) {
          espessura = document.querySelector(`.dinamico-${indice_selecionado}_espessura`).value;
          url += `&espessura=${espessura}`;
        }

        const forma = tipoDaLinha(indice_selecionado);
        if (forma) {
          url += `&forma=${forma}`;
        }

        const response = await fetch(url, {
          method: "GET"
        });

        if (!response.ok) {
          throw new Error('Network response was not ok');
        }

        const data = await response.json();

        document.querySelector(`.dinamico-${indice_selecionado}_tamanho`).disabled = data.length === 0;

        console.log(data);
        renderOptionsDinamicamente(`.dinamico-${indice_selecionado}_tamanho`, data);

        document.querySelector(`.dinamico-${indice_selecionado}_tamanho`).disabled = data.length === 0;
        document.querySelector(`.dinamico-${indice_selecionado}_cor`).disabled = true;
        /* document.querySelector(`.valor-${indice_selecionado}`).innerText = ''; */

        if (data.length === 1) {
          document.querySelector(`.dinamico-${indice_selecionado}_tamanho`).selectedIndex = 0;
          atualizarCoresDinamicamente(indice_selecionado);
        }

      } catch (error) {
        console.error('Houve um problema com o produto:', error);
        alert('Houve um problema com o produto: ' + error.message);
      }

    }

    async function atualizarCoresDinamicamente(indice_selecionado) {
      try {
        let espessura;
        const key = document.querySelector(`.dinamico-${indice_selecionado}_material`).value;
        const tamanho = document.querySelector(`.dinamico-${indice_selecionado}_tamanho`).value;
        let url = `includes/catalogo.php?encontrarCor=1&key=${key}&tamanho=${tamanho}`;

        if (document.querySelector(`.dinamico-${indice_selecionado}_espessura`)) {
          espessura = document.querySelector(`.dinamico-${indice_selecionado}_espessura`).value;
          url += `&espessura=${espessura}`;
        }

        const forma = tipoDaLinha(indice_selecionado);
        if (forma) {
          url += `&forma=${forma}`;
        }

        const response = await fetch(url, {
          method: "GET"
        });

        if (!response.ok) {
          throw new Error('Network response was not ok');
        }

        const data = await response.json();

        document.querySelector(`.dinamico-${indice_selecionado}_cor`).disabled = data.length === 0;
        document.querySelector(`.dinamico-${indice_selecionado}_quantidade`).disabled = data.length === 0;
        /* document.querySelector(`.valor-${indice_selecionado}`).innerText = ''; */

        renderOptionsDinamicamente(`.dinamico-${indice_selecionado}_cor`, data);
        mostrarValorDinamicamente(indice_selecionado);
      } catch (error) {
        console.error('Houve um problema com o produto:', error);
        alert('Houve um problema com o produto: ' + error.message);
      }

    }

    async function mostrarValorDinamicamente(indice_selecionado) {
      try {
        let espessura;
        const key = document.querySelector(`.dinamico-${indice_selecionado}_material`).value;
        const tamanho = document.querySelector(`.dinamico-${indice_selecionado}_tamanho`).value;
        const cor = document.querySelector(`.dinamico-${indice_selecionado}_cor`).value;
        let url = `includes/catalogo.php?encontrarValor=1&key=${key}&tamanho=${tamanho}&cor=${cor}`;

        if (document.querySelector(`.dinamico-${indice_selecionado}_espessura`)) {
          espessura = document.querySelector(`.dinamico-${indice_selecionado}_espessura`).value;
          url += `&espessura=${espessura}`;
        }

        const forma = tipoDaLinha(indice_selecionado);
        if (forma) {
          url += `&forma=${forma}`;
        }

        const response = await fetch(url, {
          method: "GET"
        });

        if (!response.ok) {
          throw new Error('Network response was not ok');
        }

        const data = await response.json();


        /* document.querySelector(`.valor-${indice_selecionado}`).innerText = data; */

      } catch (error) {
        console.error('Houve um problema com o valor do produto:');
        alert('Houve um problema com o valor do produto: ');
      }
    }

    function renderOptionsDinamicamente(selectId, options) {
      const select = document.querySelector(selectId);
      select.innerHTML = '';
      options.forEach(option => {
        const opt = document.createElement('option');
        opt.value = option;
        opt.text = option;
        select.appendChild(opt);
      });
    };

    $("#produtos-tbody").on("click", ".btn-remove-row-dinamic", function(event) {
      event.preventDefault();

      const parent = $(this).parent().parent()[0];
      console.log(parent);

      const id = $(parent).data("id-row");

      removerLinhaProduto(id);
    });

    function removerLinhaProduto($id) {
      document.querySelector(`[data-id-row="${$id}"]`).remove();
    }
  </script>

  <script>
    $("#form-cotacao").validate({
      errorClass: "invalid-feedback",
      validClass: "valid-feedback",
      rules: {
        nome: {
          required: true,
        },
        email: {
          required: true,
          email: true,
        },
        telefone: {
          required: true,
        },
        "CPF/CNPJ": {
          required: true,
        },
        cep: {
          required: true,
        },
        numero: {
          required: false,
        },
        "g-recaptcha-response": {
          required: true
        }
      },
      highlight: function(element) {
        $(element).addClass("is-invalid").removeClass("is-valid");
      },
      unhighlight: function(element) {
        $(element).addClass("is-valid").removeClass("is-invalid");
      },
      errorPlacement: function(error, element) {
        if (element.attr("name") == "g-recaptcha-response") {
          error.insertAfter(".g-recaptcha");
        } else {
          error.insertAfter(element);
        }
      },
      submitHandler: function(form, e) {
        var response = grecaptcha.getResponse();
        if (response.length === 0) {
          $(".g-recaptcha").addClass("is-invalid");
          alert("Por favor, complete o reCAPTCHA.");
        } else {
          e.preventDefault();
          var cep = $('input[name="cep"]').val();
          validarCEP(cep, function(isValid) {
            if (isValid) {
              // Cria um novo objeto FormData
              var formData = new FormData(form);

              // Adiciona os produtos dinamicamente ao FormData
              formData.append("produtos", JSON.stringify(salvarProdutos()));

              // Envia os dados via AJAX
              $.ajax({
                type: "POST",
                url: "includes/dispara-email/dispara-email-orcamento.php",
                data: formData,
                dataType: "json",
                processData: false, // Importante: desabilita o processamento automático do jQuery
                contentType: false, // Importante: desabilita a configuração automática do contentType
                beforeSend: function() {
                  $(".btn-envia").html("Aguarde...").attr("disabled", "disabled");
                  $(".form-control").prop("disabled", true);
                  $(".select-form").prop("disabled", true);
                },
                success: function(data) {
                  if (data.status) {
                    bootbox.dialog({
                      message: data.mensagem,
                      closeButton: false,
                      buttons: {
                        success: {
                          label: "OK",
                          className: "btn-success w-100 msg-sucesso",
                          callback: function() {
                            $(".btn-envia").html("Enviar").removeAttr("disabled");
                            $(".form-control").prop("disabled", false);
                            $(".select-form").prop("disabled", false);
                            $(".form-control").removeClass("is-valid");
                            $("#form-cotacao")[0].reset();
                            $("#exampleModal").modal("hide");
                            grecaptcha.reset();
                            window.location.reload();
                          },
                        },
                      },
                    });
                  } else {
                    bootbox.dialog({
                      title: "Ocorreu um erro!",
                      message: data.mensagem,
                      closeButton: false,
                      buttons: {
                        success: {
                          label: "Ok",
                          className: "btn-warning w-100",
                          callback: function() {
                            $(".btn-envia").html("Enviar").removeAttr("disabled");
                            $(".form-control").prop("disabled", false);
                            $(".select-form").prop("disabled", false);
                          },
                        },
                      },
                    });
                  }
                },
                error: function() {
                  bootbox.dialog({
                    title: "Ocorreu um erro",
                    message: "Infelizmente ocorreu um erro, tente mais tarde novamente.",
                    closeButton: false,
                    buttons: {
                      success: {
                        label: "Ok",
                        className: "btn-warning w-100",
                        callback: function() {
                          $(".btn-envia").html("Enviar").removeAttr("disabled");
                          $(".form-control").prop("disabled", false);
                          $(".select-form").prop("disabled", false);
                        },
                      },
                    },
                  });
                },
              });
            } else {
              alert("Insira um cep válido");
            }
          });
        }
      }
    });

    function validarCEP(cep, callback) {
      // Remove caracteres não numéricos
      cep = cep.replace(/\D/g, '');

      // Verifica se o CEP tem 8 dígitos
      if (cep.length !== 8) {
        callback(false);
        return;
      }

      // Consulta o CEP na API ViaCEP
      $.ajax({
        url: `https://viacep.com.br/ws/${cep}/json/`,
        dataType: 'json',
        success: function(response) {
          if (response.erro) {
            callback(false); // CEP inválido
          } else {
            callback(true); // CEP válido
          }
        },
        error: function() {
          callback(false); // Erro na API
        }
      });
    }
  </script>

  <script>
    function salvarProdutos() {
      let dadosTabela = [];

      $("#produtos-tbody tr[data-id-row]").each(function() {
        let linhaId = $(this).attr('data-id-row');
        let tipo = $(this).find('.selecionar_tipo-dinamico').find('option:selected').text().trim();
        let material = $(this).find(`.dinamico-${linhaId.split('-')[1]}_material`).val();
        let link = $(this).find(`.dinamico-${linhaId.split('-')[1]}_material`).val();
        let espessura = $(this).find(`.dinamico-${linhaId.split('-')[1]}_espessura`).val();
        let tamanho = $(this).find(`.dinamico-${linhaId.split('-')[1]}_tamanho`).val();
        let cor = $(this).find(`.dinamico-${linhaId.split('-')[1]}_cor`).val();
        let quantidade = $(this).find(`.dinamico-${linhaId.split('-')[1]}_quantidade`).val();
        let nome = $(this).find(`.dinamico-${linhaId.split('-')[1]}_material`).find('option:selected').text().trim();

        // Adiciona produto apenas se algum campo tiver conteúdo
        if (tipo && nome && material && tamanho && cor && quantidade && link) {
          dadosTabela.push({
            tipo,
            nome,
            material,
            espessura,
            tamanho,
            cor,
            quantidade,
            valor: "Consultar",
            link
          });
        }
      });

      return dadosTabela;
    }
  </script>

</body>

</html>