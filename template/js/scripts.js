/*  Ativo menu */
$(document).ready(function () {
	var url_atual = window.location;
	$('.menu-box ul li a[href="' + url_atual + '"]').addClass("menu-ativo");
	$('ul.sidebar-conteudo li a[href="' + url_atual + '"]').addClass("ativo");
});

/* Imagem Lightbox */
$("[data-lightbox]").magnificPopup({
	type: "image",
});

/* Accordion */
$("[data-accordion-titulo]").click(function () {
	$(this).next().slideToggle();
});

/* Menu Responsivo */
$(document).ready(function () {
	$("[data-menu-principal]")
		.clone()
		.appendTo("[data-menu-lateral-conteudo]")
		.find("[data-btn-menu-responsivo]")
		.remove();
});

$("body").on("click", "[data-menu]", function () {
	$("[data-menu-lateral]").fadeToggle().toggleClass("menu-lateral-visivel");
	$("body").toggleClass("overflow");
});

/* DropDown - Responsivo */
$(document).ready(function () {
	$(".btn-dropdown", this).on("click", function (e) {
		$(".ul-dropdown-responsivo", this).stop(true, true).slideToggle();
		e.stopPropagation();
	});
});

/* Verifica Seo */
var focus = {
	verificaSEO: function () {
		var url = window.location;
		if (url.href.indexOf("localhost/") >= 0) {
			var erros = [];
			var title = $("title").html();
			var desc = $("head meta[name=description]").attr("content");
			var canonical = $("head link[rel=canonical]").attr("href");
			var imgs = $("img");
			var mensagem = "Alerta! SEO incorreto.";
			if (title.length > 70) {
				erros.push("Title acima dos 70 caracteres.");
			}
			if (desc.length > 160) {
				erros.push("Description acima dos 160 caracteres.");
			}
			if (desc.length < 130) {
				erros.push("Description abaixo dos 130 caracteres.");
			}
			if (url.href !== canonical) {
				erros.push("Canonical incorreta.");
			}
			for (var i = imgs.length - 1; i >= 0; i--) {
				var alt = imgs[i].alt;
				if (alt.length === 0) {
					erros.push("Imagem sem alt: " + imgs[i].currentSrc);
				}
			}
			if (erros.length > 0) {
				var html_erros = '<div style="';
				html_erros +=
					"width:300px;margin:0 auto;position:fixed;top:10px;right:10px;";
				html_erros +=
					"z-index:9999999;text-align:center;border:1px solid #eee;";
				html_erros +=
					"padding:0 10px;background-color:#fff;box-shadow:0 4px 13px 0 rgba(0,0,0,.45)";
				html_erros += '">';
				html_erros += "<h2>" + mensagem + "</h2>";
				$.each(erros, function (i, val) {
					html_erros += "<p>" + val + "</p>";
				});
				html_erros += "</div>";
				$("body").prepend(html_erros);
			}
			/**
			 * Densidade
			 * Calculo de densindade
			 * 1% a 2% (dependendo 3%)
			 * Menos que 1% "talvez" seja irrelevante
			 * Mais que 3% é SPAM
			 * Como é feito o cálculo?
			 * A = Quantidade de PC
			 * B = Quantidade de Total de Palavras do Texto
			 * Densidade = (A / B) * 100
			 */
		}
	},
};

/* Formulário Sidebar */
$(function () {
	$("#formulario").validate({
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
			mensagem: {
				required: true,
			},
		},
		highlight: function (element) {
			$(element).addClass("is-invalid").removeClass("is-valid");
		},
		unhighlight: function (element) {
			$(element).addClass("is-valid").removeClass("is-invalid");
		},
		submitHandler: function (form, e) {
			$.ajax({
				type: "POST",
				url: "includes/dispara-email/dispara-email-contato.php",
				data: $(form).serializeArray(),
				dataType: "json",
				beforeSend: function () {
					$(".btn-envia").html("Aguarde...").attr("disabled", "disabled");
					$(".form-control").prop("disabled", true);
					$(".select-form").prop("disabled", true);
				},
				success: function (data) {
					if (data.status) {
						bootbox.dialog({
							message: data.mensagem,
							closeButton: false,
							buttons: {
								success: {
									label: "OK",
									className: "btn-success w-100 msg-sucesso",
									callback: function () {
										$(".btn-envia").html("Enviar").removeAttr("disabled");
										$(".form-control").prop("disabled", false);
										$(".select-form").prop("disabled", false);
										$(".form-control").removeClass("is-valid");
										$("#formulario")[0].reset();
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
									callback: function () {
										$(".btn-envia").html("Enviar").removeAttr("disabled");
										$(".form-control").prop("disabled", false);
										$(".select-form").prop("disabled", false);
									},
								},
							},
						});
					}
				},
				error: function () {
					bootbox.dialog({
						title: "Ocorreu um erro",
						message:
							"Infelizmente ocorreu um erro, tente mais tarde novamente.",
						closeButton: false,
						buttons: {
							success: {
								label: "Ok",
								className: "btn-warning w-100",
								callback: function () {
									$(".btn-envia").html("Enviar").removeAttr("disabled");
									$(".form-control").prop("disabled", false);
									$(".select-form").prop("disabled", false);
								},
							},
						},
					});
				},
			});
			e.preventDefault();
		},
	});
});

/* Scroll Menu, Remover menu com click  */
jQuery(document).ready(function ($) {
	$("a.scroll").click(function (event) {
		$("html,body").animate(
			{
				scrollTop: $(this.hash).offset().top,
			},
			1000
		);
		return false;
	});
});

$(document).ready(function () {
	const responsivoRemoveMenuOnClick = document.querySelector(".menu-lateral");

	$("ul li a.scroll").click(function () {
		$("body").removeClass("overflow");
		$("[data-menu-lateral]").removeClass("menu-lateral-visivel");
		responsivoRemoveMenuOnClick.style.cssText = "display: none";
		scrollTopMenu($(this));
	});
});

/* GlightBox */
$(document).ready(function () {
	const galleryLightbox = GLightbox({
		selector: ".gallery-lightbox",
	});
});

/* Regiões */
$(document).ready(function () {
	$(".nav-link-regioes-br").on("click", function (e) {
		e.preventDefault();
		var regiao = $(this).data("regiao");
		$(".modal-title").text(regiao);
		$(".tab-pane").addClass("d-none show");
		$("#regiao-br-" + ($(this).index() + 1)).removeClass("d-none");
		$("#RegioesBrModal").modal("show");
	});
	$(".nav-link-regioes-sp").on("click", function (e) {
		e.preventDefault();
		var regiao = $(this).data("regiao");
		$(".modal-title").text(regiao);
		$(".tab-pane").addClass("d-none show");
		$("#regiao-sp-" + ($(this).index() + 1)).removeClass("d-none");
		$("#RegioesSpModal").modal("show");
	});
});

/*  Swiper Informações */
$(document).ready(function () {
	var swiper = new Swiper(".mySwiper-mais-visitados", {
		grabCursor: true,
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		autoplay: {
			delay: 3500,
			disableOnInteraction: false,
		},
		breakpoints: {
			640: {
				slidesPerView: 2,
				spaceBetween: 20,
			},
			768: {
				slidesPerView: 3,
				spaceBetween: 40,
			},
			1024: {
				slidesPerView: 4,
				spaceBetween: 50,
			},
		},
	});
});

/*  Faixa Informações Dinâmica */
$(document).ready(function () {
	$.ajax({
		type: "POST",
		url: "includes/faixa-informacoes.php",
		dataType: "html",
		success: function (data) {
			var h2Elementos = $(".texto-seo h2");
			var h3Elementos = $(".texto-seo h3");
			if (h2Elementos.length > 1) {
				h2Elementos.eq(1).before(data);
			} else if (h3Elementos.length > 0) {
				h3Elementos.first().before(data);
			}
		}
	});
});

var swiper = new Swiper(".mySwiper", {
	pagination: {
		el: ".swiper-pagination",
		clickable: true,
	},
	navigation: {
		nextEl: ".mySwiper .swiper-button-next",
		prevEl: ".mySwiper .swiper-button-prev",
	},
});

$(".btn-send-whatsapp").click(() => redirectToWhatsApp());

function redirectToWhatsApp() {

	var quantidade = document.querySelector('input[name="quantidade"]').value;
	var nome = document.querySelector('input[name="nome-produto"]').value;

	var mensagem = `Olá, eu gostaria de comprar ${quantidade} unidades do produto ${nome}.`;

	var encodedMessage = encodeURIComponent(mensagem);

	var whatsappURL = `https://api.whatsapp.com/send?phone=seu-5511937387748&text=${encodedMessage}`;

	window.open(whatsappURL, '_blank');
}


$(".btn-inserir").click(function () {

	var id = "";
	if (document.querySelector("#espessuras")) {
		id = $("#espessuras").val();
	}
	else {
		id = $("#tamanhos").val().split("_")[1];
	}

	var cor = $("#cores").val();
	var nome = $("#nome").val();
	var key = $("#key").val();
	var quantidade = $("#quantidade").val();
	var tamanho = $("#tamanhos").find('option:selected').text().trim();
	var formaEl = document.querySelector('input[name="forma"]:checked');

	var payload = { id, cor, nome, key, quantidade, tamanho };

	if (document.querySelector("#espessuras")) {
		payload.espessura = $("#espessuras").find('option:selected').text().trim();
	}

	if (formaEl) {
		payload.forma = formaEl.value;
	}

	inserirProdutoCarrinho(payload);
});

function inserirProdutoCarrinho(data) {

	$.ajax({
		type: "POST",
		url: "includes/cart.php",
		data: {
			"add-cart": {
				...data
			},
		},
		dataType: "JSON",
		success: function (response) {
			if (response.status) {

				$("#Carrinho").modal("show");
			}
		}
	});

}

$(".btn-clearAll-cart").on("click", function () {
	$.ajax({
		type: "GET",
		url: "includes/cart.php",
		data: { "clearAll": true },
		dataType: "JSON",
		success: function (response) {
			window.location.reload();
		}
	});
});

function buscarCores(chave_principal) {

	var chave_principal = document.querySelector("#key").value;
	var tamanho_atual = document.querySelector("#tamanhos").value.split("_");
	if (document.querySelector("#espessuras")) {
		var index_item = document.querySelector("#espessuras").value;
	} else {
		var index_item = tamanho_atual[0];
	}

	var formaEl = document.querySelector('input[name="forma"]:checked');
	var formaParam = formaEl ? `&forma=${formaEl.value}` : '';

	fetch(`includes/catalogo.php?k=${chave_principal}&i=${index_item}&sizeIndex=${tamanho_atual[1]}&filterBy=cores${formaParam}`)
		.then((res) => res.json())
		.then(data => {
			inserirCores(data.cores);
			$(".produto-prop__cores").removeClass("d-none");
		});

}

function inserirCores(array_cores) {
	$("#cores").empty();
	var html = ``;
	Array.from(array_cores).forEach((val, ind) => {
		html += `<option value="${val}">${val}</option>`;
	});
	$("#cores").html(html);
}



function buscarTamanhos(element) {
	var main_key = document.querySelector("#key");
	if (element.length > 0) {

		var formaEl = document.querySelector('input[name="forma"]:checked');
		var formaParam = formaEl ? `&forma=${formaEl.value}` : '';

		fetch(`includes/catalogo.php?k=${main_key.value}&i=${element.value}&filterBy=tamanhos${formaParam}`)
			.then((res) => res.json())
			.then(data => {
				inserirTamanhos(data);
				$(".produto-prop__tamanhos").removeClass("d-none");
			});
	}
}

$(document).on("change", 'input[name="forma"]', function () {
	if (typeof dadosForma === "undefined") return;

	var forma = $(this).val();
	var opcoes = dadosForma[forma] || [];
	var html = "";

	opcoes.forEach((label, idx) => {
		html += `<option value="${idx}">${label}</option>`;
	});

	$("#espessuras").html(html);
	buscarTamanhos(document.querySelector("#espessuras"));
});

function inserirTamanhos({ tamanhos, url }) {

	$("#tamanhos").empty();
	var html = ``;

	tamanhos.forEach((value, key) => {
		html += `<option value="${url}_${key}">${value}</option>`;
	});

	$("#tamanhos").html(html);

	buscarCores();

}

$(document).ready(function () {
	if (document.querySelector('[data-content="short-production"]')) {

		buscarCores(document.querySelector('[data-content="short-production"] #tamanhos'));
	} else {
		buscarTamanhos(document.querySelector("#espessuras"));
	}
});

$(".btn-remove-cart").on("click", function () {
	var id = $(this).data("id");

	$.ajax({
		type: "GET",
		url: "includes/cart.php",
		data: { id },
		dataType: "JSON",
		success: function ({ message, status }) {
			if (status) {
				bootbox.alert(message, function () {
					window.location.reload();
				});
			}
		}
	});
});

/* Formulário modal */
$(function () {
	$(".form-catalogo").validate({
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
		},
		highlight: function (element) {
			$(element).addClass("is-invalid").removeClass("is-valid");
		},
		unhighlight: function (element) {
			$(element).addClass("is-valid").removeClass("is-invalid");
		},
		submitHandler: function (form, e) {
			$.ajax({
				type: "POST",
				url: "includes/dispara-email/dispara-email-modal.php",
				data: $(form).serializeArray(),
				dataType: "json",
				beforeSend: function () {
					$(".btn-envia").html("Aguarde...").attr("disabled", "disabled");
					$(".form-control").prop("disabled", true);
					$(".select-form").prop("disabled", true);
				},
				success: function (data) {
					if (data.status) {

						if (window.URL_CATALOGO_PDF) {
							var linkDownload = document.createElement("a");
							linkDownload.href = window.URL_CATALOGO_PDF;
							linkDownload.download = "catalogo-melifort.pdf";
							document.body.appendChild(linkDownload);
							linkDownload.click();
							document.body.removeChild(linkDownload);
						}

						bootbox.dialog({
							message: data.mensagem,
							closeButton: false,
							buttons: {
								success: {
									label: "OK",
									className: "btn-success w-100 msg-sucesso",
									callback: function () {
										$(".btn-envia").html("Enviar").removeAttr("disabled");
										$(".form-control").prop("disabled", false);
										$(".select-form").prop("disabled", false);
										$(".form-control").removeClass("is-valid");
										$(".form-catalogo")[0].reset();
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
									callback: function () {
										$(".btn-envia").html("Enviar").removeAttr("disabled");
										$(".form-control").prop("disabled", false);
										$(".select-form").prop("disabled", false);
									},
								},
							},
						});
					}
				},
				error: function () {
					bootbox.dialog({
						title: "Ocorreu um erro",
						message:
							"Infelizmente ocorreu um erro, tente mais tarde novamente.",
						closeButton: false,
						buttons: {
							success: {
								label: "Ok",
								className: "btn-warning w-100",
								callback: function () {
									$(".btn-envia").html("Enviar").removeAttr("disabled");
									$(".form-control").prop("disabled", false);
									$(".select-form").prop("disabled", false);
								},
							},
						},
					});
				},
			});
			e.preventDefault();
		},
	});
});


$(".whatsapp-fixed img").click(function () {
	if ($(".whatsapp-controller").hasClass("open")) {
		$(".whatsapp-controller").css("display", "none");
		$(".whatsapp-controller").removeClass("open");
	} else {
		$(".whatsapp-controller").show("");
		$(".whatsapp-controller").addClass("open");
	}
});

$("i.close-whatsApp").click(function () {
	$(".whatsapp-controller").css("display", "none");
	$(".whatsapp-controller").removeClass("open");
});

/*  */
$("#form-whatsapp").validate({
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
			required: true
		}
	},
	highlight: function (element) {
		$(element).addClass("is-invalid").removeClass("is-valid");
	},
	unhighlight: function (element) {
		$(element).addClass("is-valid").removeClass("is-invalid");
	},
	submitHandler: function (form, e) {
		$(form)[0].reset();
		window.open("https://web.whatsapp.com/send?phone=5511937387748&text=Olá, tudo bem?", '_blank');
	},
});
