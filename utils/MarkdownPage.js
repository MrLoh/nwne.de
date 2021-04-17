import React from "react";
import Head from "next/head";

export const MarkdownPage = ({ html, title }) => (
  <>
    <Head>
      <title>{title}</title>
    </Head>
    {Array.isArray(html) ? (
      html.map((html, i) => (
        <div key={i} className="seite">
          <article dangerouslySetInnerHTML={{ __html: html }} />
        </div>
      ))
    ) : (
      <div className="seite" dangerouslySetInnerHTML={{ __html: html }} />
    )}
  </>
);
