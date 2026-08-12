


<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

  <url>
    <loc>https://home-puce-kappa.vercel.app/</loc>
  </url>

  <url>
    <loc>https://home-puce-kappa.vercel.app/about</loc>
  </url>

  <url>
    <loc>https://home-puce-kappa.vercel.app/privacy-policy</loc>
  </url>

  <url>
    <loc>https://home-puce-kappa.vercel.app/contact</loc>
  </url>

</urlset>
<script>
import type { MetadataRoute } from "next";

export default function sitemap(): MetadataRoute.Sitemap {
  const baseUrl = "https://home-puce-kappa.vercel.app";

  return [
    {
      url: baseUrl,
      lastModified: new Date(),
    },
    {
      url: `${baseUrl}/about`,
      lastModified: new Date(),
    },
    {
      url: `${baseUrl}/privacy-policy`,
      lastModified: new Date(),
    },
    {
      url: `${baseUrl}/contact`,
      lastModified: new Date(),
    },
  ];
}</script>