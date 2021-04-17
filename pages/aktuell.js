import React from "react";
import Head from "next/head";

import { getMarkdownProps, getContentPaths } from "../utils/static-helpers";
import { MarkdownPage } from "../utils/MarkdownPage";

export const getStaticProps = async ({ params }) => {
  const paths = getContentPaths().filter((p) => p.params.page === "aktuell");
  console.log(paths);
  const html = await Promise.all(
    paths
      .sort((a, b) => (a.subpage > b.subpage ? 1 : -1))
      .map(
        async ({ params }) =>
          (
            await getMarkdownProps(
              `/content/${params.page}/${params.subpage}.md`
            )
          ).html
      )
  );
  return { props: { html } };
};

export default MarkdownPage;
