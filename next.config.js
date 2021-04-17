module.exports = {
  redirects: () => {
    return [
      {
        source: "/",
        destination: "/aktuell",
        permanent: false,
      },
      {
        source: "/:page(\\w+).php",
        destination: "/:page",
        permanent: true,
      },
      {
        source: "/:page/:subpage(\\w+).php",
        destination: "/:page/:subpage",
        permanent: true,
      },
    ];
  },
};
