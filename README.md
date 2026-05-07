# ubaidahmedawan.github.io

Personal portfolio site for Ubaid Ahmed Awan, served from GitHub Pages at [ubaidahmedawan.github.io](https://ubaidahmedawan.github.io).

## Stack

- Single static `index.html` at the repo root
- Tailwind CSS via CDN, no build step
- A few inline SVG icons; no icon-font dependency
- Resume PDF served from the repo root as `UBAID_CV.pdf`

## Local preview

Open `index.html` directly in a browser, or serve the directory:

```bash
python3 -m http.server 8080
# then open http://localhost:8080
```

## Deploy

Push to `master`. GitHub Pages serves the root automatically. The `.nojekyll` file at the root disables Jekyll processing so files are served as-is.

## Files

- `index.html` is the entire site
- `.nojekyll` disables Jekyll
- `UBAID_CV.pdf` is the downloadable resume
- `OLD/` contains the previous site, kept for reference and not linked
