# AGENTS.md

## Project
Build and refine the WordPress website for **SahiRastha** (`sahirastha.in`), a founder-led asset-recovery and claim-support business in India.

## Canonical brand and naming
- Use **SahiRastha** / **sahirastha.in** as the canonical public spelling in code, UI, metadata, and content.
- Treat `Sahirasta` in older source files as a legacy typo unless the user explicitly overrides it.
- Keep the business founder-led in tone. Do not make it sound like a large institution.

## What the business does
SahiRastha helps individuals and families recover or regularise:
- shares and IEPF matters
- insurance claims and payout issues
- provident fund
- mutual funds
- dormant / inoperative bank deposits

Primary audiences:
- families handling matters after a death
- widows and legal heirs
- NRIs handling Indian assets from abroad
- people with old, incomplete, mismatched, or scattered records

## Core positioning
This is **not**:
- a generic financial advisory firm
- a brokerage
- a large institutional consultancy

The website should feel:
- serious
- calm
- trustworthy
- practical
- process-disciplined
- founder-led

Avoid:
- corporate jargon
- startup hype
- fake scale
- vague authority claims
- decorative fluff
- generic “wealth” language

## Source-of-truth content
Read `docs/content-source/README.md` before implementing pages.

Priority order for content:
1. `docs/content-source/current/` files
2. `docs/content-source/spreadsheets/` exports
3. `docs/content-source/archive/` only if current files are silent

If a `current` file conflicts with an `archive` file, prefer `current`.

## High-level page map
Core pages:
- Home
- Service Hub
- Pathway pages
- Process
- About / Why SahiRastha
- Pricing
- FAQ
- Contact
- Case Stories / Testimonials

Service clusters:
- Shares & Securities
- Insurance Claims & Recovery
- PF, Mutual Funds & Bank Deposits

Pathway pages must be treated as important conversion pages, not filler.

## Build rules
- Build for WordPress.
- Prefer Gutenberg-first architecture.
- Keep marketing copy block-editable wherever possible.
- Do not hardcode editable page copy into PHP templates unless it is true site chrome.
- Use reusable patterns/components for repeated sections.
- Keep the site mobile-first and responsive from the start.
- Avoid sidebars on core landing pages and service pages.
- Keep navigation short and clear.
- Use strong internal linking between:
  - homepage
  - service hub
  - service pages
  - pathway pages
  - core trust pages

## UX and conversion rules
- Primary goal: qualified inquiries.
- Use clear CTAs such as:
  - Request a Case Review
  - Request a Consultation
  - Explore Services
- A sticky WhatsApp / primary inquiry CTA on mobile is acceptable if implemented cleanly.
- Do not use pop-up clutter, rotating carousels, or generic stock-finance visuals.
- Users must be able to identify their situation quickly, even if they do not know the technical label.

## Content rules
- Use plain, situation-led language.
- Explain route clarity, document friction, nomination issues, legal-heir issues, KYC mismatch, old records, and institution-side blockers clearly.
- Do not invent statistics, success rates, client counts, or authority claims.
- If a source file marks numbers as placeholders, keep them as placeholders until verified.
- Draft testimonials / case-story models are **not** publishable testimonials until explicitly approved.
- Do not overpromise timelines, outcomes, or recoverability.
- Trust must come from clarity and honesty, not bravado.

## Design rules
- The visual direction should be clean, serious, and calm.
- Prefer strong hierarchy, readable spacing, restrained color use, and card-based grouping where helpful.
- Do not use flashy gradients, corporate handshake imagery, or “finance dashboard” clichés.
- Design for cognitive overload: these users are often confused, grieving, or handling messy records.

## SEO rules
- Treat service pages and pathway pages as primary SEO assets.
- Use plain-English headings and metadata.
- Keep important copy as live crawlable text, not text baked into images.
- Use internal links deliberately.
- Do not stuff keywords.

## Implementation discipline
- For complex tasks, plan first before editing.
- Keep diffs focused; do not refactor unrelated files.
- Preserve existing working behavior unless the task requires a change.
- If you make assumptions, state them in comments / notes / PR text.
- Prefer small, reviewable commits or PR-sized changes.

## When using source files
- `docs/content-source/current/` is reference material, not production code.
- Do not rewrite source documents unless the task is explicitly about updating source content.
- If content needs to be adapted for implementation, preserve meaning and tone while improving structure for the web.

## If something is unclear
- Prefer restrained assumptions over sprawling invention.
- Do not silently “upgrade” the business into a different business model.
- When in doubt, choose clarity, editability, maintainability, and conversion over decorative complexity.
