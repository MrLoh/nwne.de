import fs from "fs";
import path from "path";
import matter from "gray-matter";
import remark from "remark";
import html from "remark-html";

export const getMarkdownProps = async (fileName) => {
  const filePath = path.join(process.cwd(), fileName);
  const fileContent = fs.readFileSync(filePath, "utf8");
  const { data, content } = matter(fileContent);
  const res = await remark().use(html).process(content);
  return { ...data, html: res.toString() };
};

export const getContentPaths = () => {
  const contentPath = path.join(process.cwd(), "/content");
  const dirs = fs.readdirSync(contentPath, { withFileTypes: true });
  const paths = [];
  dirs
    .filter((dir) => dir.isDirectory())
    .forEach((dir) => {
      const dirPath = path.join(process.cwd(), `/content/${dir.name}`);
      fs.readdirSync(dirPath)
        .filter((n) => n !== ".DS_Store")
        .map((n) => n.replace(".md", ""))
        .forEach((subpage) => {
          if (subpage === "index") {
            paths.push({ params: { page: dir.name } });
          } else {
            paths.push({ params: { page: dir.name, subpage } });
          }
        });
    });
  return paths;
};
