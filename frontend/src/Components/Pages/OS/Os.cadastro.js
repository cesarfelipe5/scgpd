import styles from './Os.module.css'
import Input from '../../Forms/Input'
import Select from '../../Forms/Select'
import SubmitButton from '../../Forms/SubmitButton'
import {FaRegSave, FaRegTimesCircle} from 'react-icons/fa'
import {Link} from 'react-router-dom'


function OsCadastro(){

    return(
        <form className={styles.form}>

            <h1 className={styles.h1}>Registrar Os's</h1>

            <div className={styles.par}>
                <Input type="string" text="*Placa" name="placa" placeholder="Insira a placa"/>
                <Input type="text" text="*Moodelo" name="name" placeholder="Insira o modelo do veiculo"/>
                <Select name="category_id" text="*Debitos?"/>
                <Select name="category_id" text="*Financiamento?"/>
            </div>

            <div className={styles.par}>
                <Input type="text" text="*Nome do Cliente" name="name" placeholder="Insira o nome"/>
                <Input type="integer" text="*CPF" name="cpf" placeholder="Insira o CPF"/>
                <Input type="text" text="*N° Telefone Celular" name="numero" placeholder="Insira o numero"/>
                <Input type="text" text="*Serviço(s)" name="name" placeholder="Insira o(s) serviço(s)"/>
            </div>

            <div className={styles.par}>
                <Input type="float" text="*Valor Serviço(s)" name="value" placeholder="Insira o valor"/>
                <Input type="number" text="*Prazo" name="number" placeholder="Insira o prazo"/>
                <Select name="category_id" text="*Conversão Merco Sul?"/>
                <Input type="text" text="*Observações" name="text" placeholder="Insira as observações"/>
            </div>

            <div className={styles.um}>
                <Input type="date" text="*Data" name="date"/>
            </div>

            <p className={styles.p}> Em caso de comunicação de venda preencha </p>

            <div className={styles.par}>
                <Input type="float" text="*Valor Veiculo" name="name" placeholder="Insira o valor"/>
                <Input type="date" text="*Data de Venda" name="date"/>
                <Input type="date" text="*Data de Vencimento" name="date"/>
                
            </div>

            <div className={styles.par}>
                <Link to ='/os'><SubmitButton icon={<FaRegSave/>} text="Salvar"/></Link>
                <Link to ='/os'><SubmitButton icon={<FaRegTimesCircle/>} text="Cancelar"/></Link>
            </div>

        </form>
    )
}

export default OsCadastro