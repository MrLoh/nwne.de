import { useEffect } from "react";

const Redirect = () => {
  useEffect(() => {
    window.location.replace("aktuell");
  });
  return null;
};

export default Redirect;
