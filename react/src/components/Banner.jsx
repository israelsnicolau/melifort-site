import { Swiper, SwiperSlide } from "swiper/react";
import "swiper/css";
import { Navigation, Autoplay, EffectFade } from "swiper/modules";
import "swiper/css/navigation";
import "swiper/css/effect-fade";

function Banner() {
  return (
    <section className="banner-home">
      <Swiper
        modules={[Navigation, Autoplay, EffectFade]}
        navigation={true}
        autoplay={{
          delay: 4000,
          disableOnInteraction: false,
          pauseOnMouseEnter: true,
        }}
        loop={true}
        effect="fade"
        fadeEffect={{ crossFade: true }}
        speed={1400}
      >
        <SwiperSlide>
          <img
            src="/carroussel/policarbonato.jpg"
            alt="Policarbonato Melifort"
            className="banner-imagem"
          />
          <div className="container-escrita">
            <div className="banner-home__wrapper">
              <div className="banner-home__content">
                <h2>Policarbonato</h2>

                <p>
                  O policarbonato Melifort oferece resistência excepcional,
                  durabilidade inigualável e versatilidade para uma variedade de
                  projetos. Confie na qualidade e segurança que ele proporciona.
                </p>

                <a href="/contato" className="btn-contato-banner">
                  <span>Entre em contato</span>
                </a>
              </div>
            </div>
          </div>
        </SwiperSlide>

        <SwiperSlide>
          <img
            src="/carroussel/bobina_pvc.jpg"
            alt="Bobina de PVC Melifort"
            className="banner-imagem"
          />
          <div className="container-escrita">
            <div className="banner-home__wrapper">
              <div className="banner-home__content">
                <h2>Bobina de PVC</h2>

                <p>
                  Com nossa experiência e compromisso com a excelência,
                  oferecemos bobinas de PVC duráveis e versáteis para uma
                  variedade de aplicações.
                </p>

                <a href="/contato" className="btn-contato-banner">
                  <span>Entre em contato</span>
                </a>
              </div>
            </div>
          </div>
        </SwiperSlide>

        <SwiperSlide>
          <img
            src="/carroussel/acrilico.jpg"
            alt="Acrílico Melifort"
            className="banner-imagem"
          />
          <div className="container-escrita">
            <div className="banner-home__wrapper">
              <div className="banner-home__content">
                <h2>Acrílico</h2>

                <p>
                  Seja para aplicações arquitetônicas, industriais ou de design,
                  nosso acrílico é a escolha ideal para quem busca qualidade,
                  beleza e confiabilidade.
                </p>

                <a href="/contato" className="btn-contato-banner">
                  <span>Entre em contato</span>
                </a>
              </div>
            </div>
          </div>
        </SwiperSlide>
      </Swiper>
    </section>
  );
}

export default Banner;
