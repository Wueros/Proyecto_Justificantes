import { useState } from 'react';

export default function Encabezado() {
  const [count, setCount] = useState(0);

  return (
    <header>
        <img src="/CBTIS86logo.png" alt="Encabezado de la Página" />
    </header>
  );
}
