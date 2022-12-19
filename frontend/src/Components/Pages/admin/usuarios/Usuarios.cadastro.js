import styles from './Usuarios.module.css'
import Input from '../../../Forms/Input'
//import Select from '../../../Forms/Select'
import SubmitButton from '../../../Forms/SubmitButton'
import {FaRegSave, FaRegTimesCircle} from 'react-icons/fa'

import {Link} from 'react-router-dom'

function UsuariosCadastro(){

    return(
        <form className={styles.form}>
            <h1 className={styles.h1}>Cadastro de Usuários</h1>
            <div className={styles.par}>
                <Input type="text" text="*Nome" name="name" placeholder="Insira o nome do usuário"/>
                <Input type="text" text="*LoginName" name="name" placeholder="Insira o LoginName"/>
            </div>
            <div className={styles.um}>
                <Input type="string" text="*Email" name="email" placeholder="Insira o email"/>
            </div>
            <div className={styles.par}>
                <Input type="password" text="*Senha" name="password" placeholder="Defina a senha"/>
                <Input type="password" text="*Confirme a Senha" name="password" placeholder="Confirme a senha"/>
            </div>
            <div className={styles.par}>
                <Link to ='/usuarios'><SubmitButton icon={<FaRegSave/>} text="Salvar"/></Link>
                <Link to ='/usuarios'><SubmitButton icon={<FaRegTimesCircle/>} text="Cancelar"/></Link>
            </div>
        </form>
    )
}

export default UsuariosCadastro