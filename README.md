# Outfit Creation WordPress Site

This is the local development environment for the Outfit Creation WordPress site, a garment manufacturing brand based in Nepal.

## Prerequisites

- [Docker Desktop](https://www.docker.com/products/docker-desktop/) installed and running.

## Getting Started

1. Open your terminal in this directory (`d:\TestOutfit`).
2. Run the following command to start the environment:
   ```bash
   docker-compose up -d
   ```
3. Wait for a few moments for the database to initialize and WordPress to start.
4. Open your web browser and navigate to: `http://localhost:8000`
5. Follow the WordPress 5-minute install process to set up your local site.

## Theme Development

The custom theme `outfit-creation` is located in `wp-content/themes/outfit-creation`. Changes made in this directory are reflected immediately in the Docker container thanks to volume mapping.

To stop the environment:
```bash
docker-compose down
```
