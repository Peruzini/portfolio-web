const PHONE = "5500000000000"; // portfolio placeholder
const DEFAULT_MESSAGE = "Olá! Vim pelo site da NKP Obra Fácil e gostaria de solicitar um orçamento.";

const whatsappUrl = (message = DEFAULT_MESSAGE) =>
  `https://wa.me/${PHONE}?text=${encodeURIComponent(message)}`;

document.querySelectorAll("[data-whatsapp]").forEach((link) => {
  link.href = whatsappUrl();
  link.target = "_blank";
  link.rel = "noopener noreferrer";
});

const header = document.querySelector(".site-header");
const menuButton = document.querySelector(".menu-toggle");
const nav = document.querySelector(".primary-nav");

const updateHeader = () => header.classList.toggle("scrolled", window.scrollY > 18);
updateHeader();
window.addEventListener("scroll", updateHeader, { passive: true });

menuButton?.addEventListener("click", () => {
  const isOpen = nav.classList.toggle("open");
  menuButton.setAttribute("aria-expanded", String(isOpen));
  menuButton.setAttribute("aria-label", isOpen ? "Fechar menu" : "Abrir menu");
});

nav?.querySelectorAll("a").forEach((link) => {
  link.addEventListener("click", () => {
    nav.classList.remove("open");
    menuButton?.setAttribute("aria-expanded", "false");
  });
});

const revealItems = document.querySelectorAll(".reveal");
if ("IntersectionObserver" in window) {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });
  revealItems.forEach((el) => observer.observe(el));
} else {
  revealItems.forEach((el) => el.classList.add("visible"));
}

const sections = [...document.querySelectorAll("main section[id]")];
const navLinks = [...document.querySelectorAll('.primary-nav a[href^="#"]')];
const syncActiveLink = () => {
  const y = window.scrollY + 140;
  let current = "";
  sections.forEach((section) => {
    if (section.offsetTop <= y) current = section.id;
  });
  navLinks.forEach((link) => {
    link.classList.toggle("active", link.getAttribute("href") === `#${current}`);
  });
};
window.addEventListener("scroll", syncActiveLink, { passive: true });
syncActiveLink();

const form = document.getElementById("quote-form");
form?.addEventListener("submit", (event) => {
  event.preventDefault();
  const data = new FormData(form);
  const nome = data.get("nome")?.trim() || "Não informado";
  const empresa = data.get("empresa")?.trim() || "Não informada";
  const servico = data.get("servico")?.trim() || "Não informado";
  const mensagem = data.get("mensagem")?.trim() || "Sem observações adicionais";

  const text = [
    "Olá! Vim pelo site da NKP Obra Fácil e gostaria de solicitar um orçamento.",
    "",
    `Nome: ${nome}`,
    `Empresa: ${empresa}`,
    `Serviço: ${servico}`,
    `Detalhes: ${mensagem}`,
  ].join("\n");

  window.open(whatsappUrl(text), "_blank", "noopener,noreferrer");
});

document.getElementById("year").textContent = new Date().getFullYear();
