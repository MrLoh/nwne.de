import { getMarkdownProps, getContentPaths } from "../../utils/static-helpers";
import { MarkdownPage } from "../../utils/MarkdownPage";

export const getStaticProps = async ({ params }) => {
  return { props: await getMarkdownProps(`/content/${params.page}/index.md`) };
};

export const getStaticPaths = async () => {
  const paths = getContentPaths().filter((p) => !p.params.subpage);
  return { paths, fallback: false };
};

export default MarkdownPage;
