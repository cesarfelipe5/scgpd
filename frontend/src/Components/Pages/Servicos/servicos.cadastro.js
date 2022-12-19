import styles from './Servicos.module.css'
import Input from '../../Forms/Input'
import SubmitButton from '../../Forms/SubmitButton'
import {FaRegSave, FaRegTimesCircle} from 'react-icons/fa'

import {Link} from 'react-router-dom'

function ServicosCadastro(){

    return(
        <form className={styles.form}>
            <h1 className={styles.h1}>Cadastro de Serviços</h1>
            <div className={styles.par}>
                <Input type="text" text="*Nome do Cliente" name="name" placeholder="Insira o nome"/>
                <Input type="float" text="*Valor Detran" name="valor" placeholder="Insira o valor do Detran"/>
                <Input type="float" text="*Valor Despachante" name="valor" placeholder="Insira o valor da Despachante"/>
            </div>
            <div className={styles.par}>
                <Link to ='/servicos'><SubmitButton icon={<FaRegSave/>} text="Salvar"/></Link>
                <Link to ='/servicos'><SubmitButton icon={<FaRegTimesCircle/>} text="Cancelar"/></Link>
            </div>
        </form>
    )
}

export default ServicosCadastro