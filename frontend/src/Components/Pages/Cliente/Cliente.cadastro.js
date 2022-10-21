import React, { useState } from "react";
import { FaRegSave, FaRegTimesCircle } from "react-icons/fa";
import { Link } from "react-router-dom";
import Input from "../../Forms/Input";
import Select from "../../Forms/Select";
import SubmitButton from "../../Forms/SubmitButton";
import styles from "./Cliente.module.css";

function ClientesCadastro() {
  const [formData, setFormData] = useState();

  const onClick = () => {
    // axios.post(process.env.BASE_URL);
  };

  return (
    <form className={styles.form}>
      <h1 className={styles.h1}> Cadastro de Clientes</h1>
      <div className={styles.par}>
        <Input
          type="text"
          text="*Nome"
          name="name"
          placeholder="Insira o nome do cliente"
        />

        <Input
          type="integer"
          text="*CPF"
          name="cpf"
          placeholder="Insira o CPF"
        />

        <Input
          handleOnChange={(event) =>
            setFormData((e) => ({ ...e, rg: event.target.value }))
          }
          type="int"
          text="*RG"
          name="rg"
          placeholder="Insira o RG"
        />

        <Select name="category_id" text="*Gênero" />
      </div>
      <div className={styles.par}>
        <Input
          type="text"
          text="*Logradouro"
          name="logradouro"
          placeholder="Insira o logradouro"
        />
        <Input
          type="text"
          text="*Bairro"
          name="bairro"
          placeholder="Insira o bairro"
        />
        <Input
          type="text"
          text="*Numero"
          name="numero"
          placeholder="Insira o numero"
        />
        <Select name="category_id" text="*Cidade" />
      </div>
      <div className={styles.par}>
        <Input
          type="integer"
          text="*CEP"
          name="cep"
          placeholder="Insira o CEP"
        />
        <Select name="category_id" text="*UF" />
        <Select name="category_id" text="*Tipo de Telefone" />
        <Input
          type="string"
          text="*N° Telefone Celular"
          name="telefone"
          placeholder="Insira o numero"
        />
      </div>
      <div className={styles.par}>
        <Link to="/clientes">
          <SubmitButton onClick={onClick} icon={<FaRegSave />} text="Salvar" />
        </Link>
        <Link to="/clientes">
          <SubmitButton icon={<FaRegTimesCircle />} text="Cancelar" />
        </Link>
      </div>
    </form>
  );
}

export default ClientesCadastro;
