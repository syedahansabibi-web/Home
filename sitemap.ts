
import type { MetadataRoute } from "next";

export default function sitemap(): MetadataRoute.Sitemap {
  const baseUrl = "https://home-puce-kappa.vercel.app";

  return [
    {
      url: baseUrl,
      lastModified: new Date(),
    },
  ];
}