# Nexora EMS — Design System

> Status: especificação visual inicial. Este documento não altera componentes. Antes de implementar, comparar os tokens com o CSS, Tailwind e componentes existentes; preservar decisões já consolidadas e registrar divergências.

## 1. Direção visual e referências

Identidade: software empresarial Nexora EMS, com marca azul orbital, linguagem técnica e superfícies de leitura confortável. As referências fornecidas orientam: (1) apresentação escura com foco em produto e brilho pontual; (2) geometria tridimensional e contraste violeta, reinterpretados em azul; (3) profundidade azul e tipografia editorial; (4) logomarca oficial Nexora EMS, que prevalece sobre as demais referências.

Não reproduzir nomes, logotipos, layouts ou elementos exclusivos dos sites de referência. Não transformar todas as páginas do ERP em landing pages. Priorizar tabelas, filtros, formulários, indicadores e fluxos operacionais. Gradientes, órbitas e objetos 3D ficam restritos a hero institucional, login ou ilustrações específicas, nunca como fundo de dados transacionais.

## 2. Cores e tokens semânticos

Valores iniciais propostos (hexadecimal), a validar contra a implementação atual:

| Token | Valor | Uso |
|---|---|---|
| `--nx-brand-500` | `#087CF5` | Marca, links e ações primárias |
| `--nx-brand-600` | `#0564D2` | Hover de ação primária |
| `--nx-brand-700` | `#064DA3` | Pressed |
| `--nx-brand-100` | `#DCEEFF` | Fundo de destaque claro |
| `--nx-cyan-400` | `#24C9F5` | Acento orbital/visual, uso limitado |
| `--nx-ink-950` | `#080D17` | Fundo institucional escuro |
| `--nx-surface-900` | `#111A2A` | Card em tema escuro |
| `--nx-surface-800` | `#1A2638` | Superfície elevada escura |
| `--nx-canvas` | `#F6F8FC` | Fundo do ERP claro |
| `--nx-surface` | `#FFFFFF` | Cards e formulários claros |
| `--nx-text` | `#172235` | Texto principal claro |
| `--nx-text-muted` | `#536177` | Texto secundário claro |
| `--nx-border` | `#DCE3ED` | Divisores e bordas |
| `--nx-success` | `#16734B` | Confirmação |
| `--nx-warning` | `#9A6100` | Atenção |
| `--nx-danger` | `#C43139` | Erro e ação destrutiva |
| `--nx-info` | `#0865BD` | Informação |

Texto principal no tema escuro: `#F5F8FF`; texto secundário: `#B2BED0`; borda: `#2A3850`. Não usar opacidade reduzida como único meio de definir contraste. Verificar WCAG AA: 4,5:1 para texto normal e 3:1 para texto grande e indicadores de interface. Estado semântico deve ter texto/ícone, não apenas cor.

Exemplo de tokens CSS (adaptar ao padrão existente, sem duplicar configuração Tailwind):

```css
:root {
  --nx-brand-500: #087cf5;
  --nx-brand-600: #0564d2;
  --nx-canvas: #f6f8fc;
  --nx-surface: #ffffff;
  --nx-text: #172235;
  --nx-text-muted: #536177;
  --nx-border: #dce3ed;
  --nx-radius-md: 12px;
  --nx-focus-ring: 0 0 0 3px rgba(8, 124, 245, .24);
}
```

## 3. Tipografia

Fonte preferencial: `Inter`, com fallback `ui-sans-serif, system-ui, sans-serif`; reutilizar a fonte do projeto se já houver família licenciada e consistente. Para destaques institucionais, permitir variação editorial somente se já existir na identidade; evitar introduzir fonte serifada no ERP. Números de tabelas financeiras: `font-variant-numeric: tabular-nums`.

| Elemento | Desktop | Mobile | Peso | Line-height |
|---|---|---|---|---|
| Hero institucional | 56px | 36px | 600 | 1.08 |
| Título de página | 30px | 24px | 600 | 1.2 |
| Título de seção | 22px | 20px | 600 | 1.3 |
| Título de card | 16px | 16px | 600 | 1.4 |
| Corpo | 14–16px | 14–16px | 400 | 1.5 |
| Labels e tabelas | 13–14px | 13–14px | 500 | 1.4 |
| Ajuda / legenda | 12px | 12px | 400 | 1.45 |

Não usar texto inferior a 12px. Títulos com largura máxima de aproximadamente 16–20 caracteres por linha em heros; texto de apoio até 65–75 caracteres por linha. Evitar centralização em telas operacionais.

## 4. Espaçamento, grid e containers

Escala base de 4px: `4, 8, 12, 16, 20, 24, 32, 40, 48, 64, 80, 96`. Evitar valores arbitrários fora dessa escala sem justificativa.

- Container institucional: `max-width: 1200px`, padding lateral `24px` desktop, `16px` mobile.
- Conteúdo do ERP: largura fluida; padding `32px` desktop, `24px` tablet, `16px` mobile; largura de leitura de formulários longos até `800px`.
- Grid de dashboard: 12 colunas desktop, 6 tablet, 1–2 mobile; `gap: 24px` desktop e `16px` mobile.
- Espaço entre seções: 48–64px institucional; 24–32px operacional.
- Card: padding 20–24px; formulários: distância vertical entre campos 16px; label e controle 6–8px.
- Sidebar ERP: largura expandida de referência `248px`; compacta `72px`, se esse comportamento já existir.

## 5. Bordas, raios e elevação

Raios: `6px` em chips, `8px` em inputs/botões, `12px` em cards, `16px` em painéis destacados, `24px` somente em seções institucionais. Não usar `rounded-[32px]` indiscriminadamente.

Borda padrão: `1px solid var(--nx-border)`. Sombra de card claro: `0 4px 16px rgba(19, 35, 57, .06)`; modal: `0 20px 60px rgba(8, 13, 23, .20)`. Preferir bordas a sombras para separar cards em dashboards. No tema escuro, usar diferença de superfície e borda, sem glow contínuo.

## 6. Componentes

### Botões

- Primário: fundo `brand-500`, texto branco, altura 40px, padding horizontal 16px, raio 8px; hover `brand-600`; pressed `brand-700`.
- Secundário: superfície neutra, borda de 1px, texto principal; hover com fundo levemente contrastante.
- Terciário: sem fundo, área clicável mínima de 40px de altura.
- Destrutivo: usar `danger` apenas na confirmação da ação destrutiva; exigir confirmação para operações irreversíveis.
- Tamanhos: pequeno 32px, padrão 40px, grande 48px. Ícone 16–18px; gap 8px.

### Formulários

Input/select: altura 40px, padding 12px, raio 8px, borda 1px. Label sempre visível; placeholder não substitui label. Texto de ajuda abaixo do campo. Erro mostra mensagem específica associada ao controle (`aria-describedby`) e borda semântica. Campos obrigatórios sinalizados de forma consistente. Máscaras não devem ocultar o valor real do dado. Para formulários densos, agrupar por assunto e manter ações no final ou em barra fixa quando justificado.

### Cards e tabelas

Card: título, conteúdo e ações com hierarquia explícita; sem ícones decorativos repetidos. Indicadores mostram unidade, período e comparação quando disponíveis. Tabelas: cabeçalho persistente quando útil, alinhamento numérico à direita, linhas de 44–48px, ações contextualizadas e estados vazios específicos. Em mobile, preferir rolagem horizontal controlada ou apresentação adaptada, sem omitir dados essenciais.

### Navegação

Navegação institucional: logo à esquerda, até 5 links principais, CTA destacado apenas quando houver ação clara. ERP: sidebar por grupos de tarefas, item ativo com fundo azul suave e indicador visível; breadcrumbs quando a profundidade exigir; topo reservado para busca, contexto e perfil. Não misturar padrões de navegação de marketing com os do ERP.

## 7. Estados de interação

| Estado | Regra |
|---|---|
| Hover | Mudança discreta de fundo/borda; duração 120–180ms |
| Focus visible | Contorno de 2px ou ring azul com contraste; nunca remover sem substituição |
| Active / pressed | Fundo mais escuro e resposta imediata; sem deslocamento excessivo |
| Disabled | Contraste visual reduzido, sem interação; explicar bloqueio quando relevante |
| Loading | Spinner de 16–20px em ação curta; skeleton apenas para blocos carregados; evitar salto de layout |
| Erro | Mensagem objetiva junto ao campo ou ação; permitir nova tentativa |
| Sucesso | Feedback textual conciso; toast temporário para ação simples, estado persistente para resultado importante |
| Vazio | Explicar ausência de registros e indicar próximo passo quando existir |

Não usar apenas toast para falhas que impedem concluir um formulário. Respeitar `prefers-reduced-motion`.

## 8. Responsividade

Breakpoints de referência compatíveis com Tailwind: `sm 640px`, `md 768px`, `lg 1024px`, `xl 1280px`, `2xl 1536px`; usar os já definidos no projeto. Desenvolver mobile-first. Abaixo de 768px: navegação institucional colapsada, sidebar ERP em drawer acessível, cards empilhados, formulários em uma coluna. Entre 768 e 1023px: grid de 6 colunas e sidebar compacta se existente. A partir de 1024px: grid de 12 colunas e sidebar expandida.

Sem scroll horizontal da página em larguras de 320px a 1920px; rolagem interna apenas em tabelas extensas. Alvos de toque idealmente ≥44×44px. Testar 360, 390, 768, 1024, 1280 e 1440px, zoom 200% e navegação por teclado.

## 9. Ícones, imagens e animação

Manter biblioteca de ícones já presente; não instalar outra sem necessidade. Ícones de interface 16–20px, traço uniforme 1,75–2px; ícones de seção até 24px. Ícone isolado exige `aria-label`; ícone decorativo usa `aria-hidden=true`.

Animações funcionais: 120–180ms para hover, 180–240ms para menus/modais; `ease-out` na entrada e `ease-in` na saída. Usar apenas `transform` e `opacity` quando possível. Não animar continuamente cards, números ou plano de fundo do ERP. Em páginas institucionais, admitir um único foco visual orbital/azul por seção e um gradiente principal no hero, se favorecer contraste e profundidade. Proibir cubos 3D decorativos em dashboards e efeitos glow em botões de rotina.

```css
@media (prefers-reduced-motion: reduce) {
  *, *::before, *::after {
    animation-duration: 0.01ms !important;
    transition-duration: 0.01ms !important;
    scroll-behavior: auto !important;
  }
}
```

## 10. Exemplos de aplicação no código existente

Se o projeto usa Vue 3 e Tailwind 4, mapear os tokens ao `@theme` ou às variáveis CSS já utilizadas, sem manter duas fontes de verdade. Exemplos ilustrativos, **não aplicar nesta etapa**:

```html
<section class="rounded-xl border border-slate-200 bg-white p-6">
  <h2 class="text-base font-semibold leading-snug text-slate-900">Pedidos recentes</h2>
  <p class="mt-1 text-sm text-slate-600">Acompanhe os pedidos cadastrados.</p>
</section>
```

```html
<button class="min-h-10 rounded-lg bg-blue-600 px-4 text-sm font-medium text-white hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500">
  Salvar alterações
</button>
```

As classes acima são aproximações dos tokens; após auditar o repositório, substituir por tokens semânticos reais, sem trocar componentes de modo indiscriminado.

## 11. Checklist para o Codex antes de editar telas

1. Ler este arquivo e identificar componentes, estilos, fontes, ícones e configuração Tailwind existentes.
2. Comparar as cores atuais com a marca; manter o que já estiver coerente e documentar divergências.
3. Diferenciar página institucional, autenticação e interface operacional antes de escolher layout.
4. Verificar contraste, foco por teclado, responsividade, loading, vazio, erro e sucesso.
5. Não introduzir bibliotecas de UI, gradientes ou sombras por conveniência.
6. Fazer alterações pequenas, por componente, com revisão visual em mobile e desktop.
7. Não alterar código apenas pela criação deste documento.

## 12. Registro de decisões pendentes

- Confirmar a paleta efetivamente utilizada no logotipo e CSS atual; os hexadecimais deste arquivo são propostas visuais, não cores extraídas com precisão da arte.
- Confirmar a fonte já instalada e os tokens do Tailwind 4.
- Identificar componentes existentes de botão, input, modal, tabela, sidebar e notificações para evitar estilos paralelos.
- Confirmar se o tema escuro será exclusivo de páginas institucionais ou também estará disponível no ERP.
