import { useState } from 'react';

export default function Menu() {
  const [count, setCount] = useState(0);

  return (
    <ul>
        <li><a href="/PagPrincipal">Inicio (Funcionamiento del Programa)</a></li>
        <li><a href="/NuevoJustificante">Nuevo Justificante</a></li>
        <li><a href="/Estadisticas">Estadisticas</a></li>
        <li><a href="/MovAdministrativos">Movimientos Administrativos</a></li>
        <li><a href="/ActDB">Actualizar Bases de Datos</a></li>
    </ul>
  );
}
