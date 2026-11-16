import sharp from "sharp";
import fs from "node:fs/promises";
import path from "node:path";

const pastaOrigem = path.resolve("public/segmentos");

const pastaDestino = path.resolve("public/segmentos-webp");

await fs.mkdir(pastaDestino, { recursive: true });

const arquivos = await fs.readdir(pastaOrigem);

const imagens = arquivos.filter((arquivo) =>
  /\.(png|jpg|jpeg)$/i.test(arquivo),
);

console.log("Imagens encontradas:", imagens);

for (const arquivo of imagens) {
  const origem = path.join(pastaOrigem, arquivo);

  const nome = path.parse(arquivo).name;
  const destino = path.join(pastaDestino, `${nome}.webp`);

  await sharp(origem)
    .resize({
      width: 800,
      withoutEnlargement: true,
    })
    .webp({ quality: 70 })
    .toFile(destino);

  console.log(`Convertida: ${arquivo} → ${nome}.webp`);
}

const pastaBanner = path.resolve("public/carroussel");
const pastaBannerWebp = path.resolve("public/carroussel-webp");

await fs.mkdir(pastaBannerWebp, { recursive: true });

const imagensBanner = await fs.readdir(pastaBanner);

for (const arquivo of imagensBanner) {
  if (!/\.(png|jpg|jpeg)$/i.test(arquivo)) continue;

  const origem = path.join(pastaBanner, arquivo);
  const nome = path.parse(arquivo).name;
  const destino = path.join(pastaBannerWebp, `${nome}.webp`);

  await sharp(origem)
    .resize({
      width: 1200,
      withoutEnlargement: true,
    })
    .webp({ quality: 80 })
    .toFile(destino);

  console.log(`Banner convertido: ${arquivo} → ${nome}.webp`);
}
const pastaHeader = path.resolve("public/header");
const pastaHeaderWebp = path.resolve("public/header-webp");

await fs.mkdir(pastaHeaderWebp, { recursive: true });

await sharp(path.join(pastaHeader, "background-header.jpg"))
  .webp({ quality: 80 })
  .toFile(path.join(pastaHeaderWebp, "background-header.webp"));

console.log("Header convertido para WebP!");

const pastaProdutos = path.resolve("public/produtos");
const pastaProdutosWebp = path.resolve("public/produtos-webp");

await fs.mkdir(pastaProdutosWebp, { recursive: true });

const imagensProdutos = ["policarbonato.png", "acrilico.png", "bobina_pvc.png"];

for (const arquivo of imagensProdutos) {
  const origem = path.join(pastaProdutos, arquivo);
  const nome = path.parse(arquivo).name;
  const destino = path.join(pastaProdutosWebp, `${nome}.webp`);

  await sharp(origem)
    .resize({
      width: 300,
      height: 300,
      fit: "inside",
      withoutEnlargement: true,
    })
    .webp({ quality: 80 })
    .toFile(destino);

  console.log(`Produto convertido: ${arquivo} → ${nome}.webp`);
}
