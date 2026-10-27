import React, { useState } from 'react';

function FormExample() {
  const [formData, setFormData] = useState({
    firstName: "",
    lastName: ""
  });

  function handleChange(event) {
    const { name, value } = event.target;
    setFormData((prevFormData) => ({
      ...prevFormData,
      [name]: value
    }));
  }

  return (
    <div>
      <h1>Formulario con Inputs Controlados</h1>
      <input
        type="text"
        name="firstName"
        value={formData.firstName}
        onChange={handleChange}
        placeholder="Nombre"
      />
      <input
        type="text"
        name="lastName"
        value={formData.lastName}
        onChange={handleChange}
        placeholder="Apellido"
      />
      <p>Nombre: {formData.firstName}</p>
      <p>Apellido: {formData.lastName}</p>
    </div>
  );
}

export default FormExample;
