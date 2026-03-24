# Windsurf Product Instructions

## Purpose

Use this document as the source of truth for continuing the product definition, UX, copy, and implementation direction of this startup concept.

This product is **not** an event organizer, booking agency, broker, or payment intermediary for offline music services.

This product **is** a classifieds, discovery, and visibility platform for the classical music ecosystem.

## Working Name

- Primary working brand: `Arco`
- Alternative descriptive MVP name: `KlassikBoard`

Recommended external descriptor:

- `The infrastructure platform for classical music`

Recommended category definition:

- classifieds and visibility platform
- discovery platform
- infrastructure platform for classical music

Avoid describing it as:

- booking platform
- event organizer
- agency
- broker
- marketplace that handles transactions

## Core Thesis

The classical music market has fragmented infrastructure.

Musicians, ensembles, space owners, venues, and instrument sellers often struggle with:

- finding suitable rehearsal and recording spaces
- finding relevant classical gigs
- finding or listing instruments in a focused environment
- being discovered by the right counterparties

There are tools for auditions and applications, but there is a gap on the other side of the market: the real-world operational infrastructure around classical music.

This product exists to solve that gap.

## Market Thesis

Initial market focus:

- Germany first
- broader DACH next
- Europe later

Why Germany:

- dense classical infrastructure
- strong amateur and professional music base
- real shortage of suitable rehearsal space in cities like Berlin
- mature hospitality, events, and venue market
- enough supply and demand to seed a niche vertical platform

## Target Users

Primary user groups:

- classical musicians
- chamber ensembles
- accompanists
- rehearsal space owners
- recording studio owners
- halls, churches, salons, and music-friendly venues
- hotels, restaurants, galleries, museums, and private hosts looking for classical acts
- instrument sellers
- luthiers and repair shops

## Product Scope

The MVP should focus on 3 pillars:

1. `Spaces`
- rehearsal rooms
- halls
- churches
- salons
- studios
- acoustic rooms suitable for classical practice or recording

2. `Gigs`
- venues posting needs
- musicians or ensembles posting availability
- classical live music opportunities

3. `Instruments`
- used instruments
- rentals
- bows
- accessories
- repair and luthier listings later

## Non-Negotiable Product Boundaries

These are hard constraints.

The platform must **not**:

- organize events
- broker deals
- negotiate terms
- take commissions on gigs, spaces, or instrument sales
- process payments for offline deals between users
- sell tickets
- provide escrow
- confirm bookings
- generate contracts between users
- handle cancellations or disputes for offline transactions

All user arrangements must happen directly between users outside the platform.

Users may continue the conversation via:

- phone
- email
- Instagram
- WhatsApp
- website
- Facebook

The platform only helps them find each other and make contact.

## Revenue Model

The business model is strictly based on digital services sold by the platform.

Allowed monetization:

- premium listings
- featured placement
- promoted posts
- subscriptions
- verification badges
- display advertising
- sponsor placements

Not allowed as core monetization:

- booking fees
- transaction commissions
- payment processing fees on offline deals
- ticketing fees

## Recommended Pricing Structure

Use this as the default pricing direction.

### Free

- public profile
- browse listings
- basic contact visibility
- limited listings during launch

### Solo Pro

- EUR 12 per month or EUR 99 per year
- for musicians and ensembles
- more active listings
- better profile visibility
- portfolio links
- alerts
- basic analytics

### Space / Venue Pro

- EUR 39 per month or EUR 349 per year
- for studios, rehearsal spaces, halls, churches, venues
- multiple listings
- gallery
- boosted placement
- inquiry analytics

### Business Pro

- EUR 89 per month or EUR 799 per year
- for multi-location accounts, dealers, larger operators
- more listings
- city and category boosts
- multi-account or team features later

### Add-ons

- Featured listing: EUR 9 for 7 days
- Featured listing: EUR 24 for 30 days
- Verified badge: EUR 29 per year
- Display ads: from EUR 149 per month

## Payments and Billing

The founder is based in North Macedonia.

Important operating constraint:

- do not rely on Stripe as the primary billing stack for the Macedonian setup

Preferred billing direction for digital services:

- Paddle
- Lemon Squeezy

Why:

- merchant of record model
- cleaner for digital subscriptions, promoted listings, and advertising products
- better fit than trying to build around offline transaction flows

Do not use Patreon as the core business model.

PayPal can be a secondary or manual backup option, but it should not define the business model.

## Legal and Product Positioning

The platform should be positioned as:

- a listings platform
- a directory
- a discovery and visibility platform

The platform should not position itself as:

- a booking service
- a promoter
- an organizer
- a contracting party

### Required public stance

The product must clearly state that:

- it only provides digital visibility and listing services
- it is not a party to agreements between users
- all negotiations, contracts, payments, licenses, permits, and event execution happen outside the platform between users

## UX Wording Rules

Use wording like:

- listing
- profile
- visibility
- discover
- contact directly
- view contact details
- visit website
- send email
- open Instagram

Avoid wording like:

- book now
- reserve
- secure payment
- guaranteed availability
- confirmed booking
- mediated by Arco
- cancel booking
- request refund

## UI Rules

Allowed UI patterns:

- profile pages
- listing cards
- category pages
- filters
- map for spaces
- contact buttons
- external links
- lead or inquiry forms
- saved searches
- email alerts
- verification badges

Avoid these UI patterns:

- booking calendars with slot locking
- checkout for gigs, spaces, or instruments
- offer and counter-offer flows
- contract acceptance flows
- escrow flows
- dispute resolution center for offline deals
- ticket purchase UI

## Homepage Positioning

Recommended homepage headline:

- `The platform for classical music infrastructure`

Recommended supporting line:

- `Find rehearsal spaces, recording places, gigs, and instruments in one place.`

Recommended German hero version:

- `Die Plattform fur klassische Musik-Infrastruktur`
- `Proberaume, Aufnahmeorte, Gigs und Instrumente an einem Ort.`

Recommended trust line:

- `Direct contact. No booking commission. No booking handling through the platform.`

## Homepage Messaging Structure

Use this homepage structure:

1. Hero
- clear category statement
- short explanation
- two CTAs:
  - `Create listing`
  - `Browse listings`

2. Core categories
- Spaces
- Gigs
- Instruments

3. How it works
- publish a listing
- get discovered
- contact directly

4. Who it is for
- musicians and ensembles
- space owners
- venues
- sellers

5. Trust / positioning block
- not an organizer
- not a booking agency
- direct off-platform arrangements

6. Pricing preview

7. Footer legal notice

## MVP Features

### Accounts and Profiles

- musician profile
- ensemble profile
- space owner profile
- venue profile
- seller profile
- public contact fields
- website and social links
- basic verification state

### Listings

- create listing
- edit listing
- category-specific listing fields
- image gallery
- city and region tagging
- price or price range
- listing status

### Search and Discovery

- category navigation
- city filtering
- instrument type filtering
- space features filtering
- event type filtering
- saved searches
- alerts

### Contact

- email
- phone
- external links
- contact form that does not create a booking workflow

### Monetization

- featured listings
- premium account upgrades
- verified badge purchase
- display ads

## Category-Specific Metadata

### Spaces

Include fields like:

- city
- hourly or daily pricing
- capacity
- piano available
- acoustics
- recording-friendly
- chairs and music stands
- accessibility
- parking or loading access
- heating
- availability notes

### Gigs

Include fields like:

- city
- event type
- date or date window
- budget range
- ensemble size
- repertoire style
- contact method

### Instruments

Include fields like:

- instrument type
- maker
- year
- condition
- certificate or provenance
- sale or rental
- pickup or shipping
- trial possible

## Go-To-Market

Initial go-to-market should not rely on broad paid acquisition.

Start with:

- German musicians as ambassadors
- early space hosts
- early venue owners
- seeded listings in Berlin first

Recommended launch city:

- Berlin

Recommended early city expansion:

- Leipzig
- Munich
- Hamburg
- Cologne

Seed strategy:

- onboard 20 to 50 quality listings manually
- recruit 10 to 20 trusted musicians or ensembles
- recruit a small number of space owners and hosts
- use testimonials from German classical musicians

## Competitor Awareness

The product is entering a market with adjacent competitors, but not a perfect classical-first infrastructure platform.

Key adjacent categories:

- rehearsal space discovery
- event and musician directories
- gig boards
- instrument marketplaces

Examples previously identified:

- Proberaumplattform Berlin
- Music Traveler
- Pirate Studios
- eventpeppers
- gigmit
- SofaConcerts
- Vioworld
- Thomann
- Reverb
- Kleinanzeigen

The product advantage should be:

- classical-first positioning
- better metadata
- cleaner trust model
- Germany-first focus
- one home for spaces, gigs, and instruments

## Strategic Sequence

Recommended execution order:

1. Spaces
2. Gigs
3. Instruments

Reason:

- spaces have strong recurring pain
- gigs create stronger demand-side pull
- instruments are useful but bring more trust and fraud complexity

## Content and Tone

Brand voice should be:

- clear
- premium but not elitist
- practical
- focused
- not flashy

Avoid generic startup language.

This should feel like a serious infrastructure product for classical music, not a hype marketplace.

## What Windsurf Should Do Next

When continuing this product, prioritize:

1. information architecture
2. landing page and category page UX
3. listings data model
4. pricing and billing UX
5. trust and verification design
6. legal-safe wording throughout the product

Windsurf should preserve the core boundary:

**This platform sells digital visibility services only.**

It does **not** mediate, organize, or transact offline music deals.

## Deliverables To Continue From Here

Good next deliverables:

- sitemap
- user flows
- MVP PRD
- homepage copy
- pricing page
- category page copy
- listing schema
- onboarding flow
- trust and verification flow
- terms and legal copy skeleton

