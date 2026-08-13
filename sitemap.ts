type MetadataRoute = {
  Sitemap: Array<{
    url: string;
    lastModified?: Date | string;
  }>;
};

export default function sitemap(): MetadataRoute["Sitemap"] {
  const baseUrl = "https://home-puce-kappa.vercel.app";

  return [
    {
      url: baseUrl,
      lastModified: new Date(),
    },
  ];
}