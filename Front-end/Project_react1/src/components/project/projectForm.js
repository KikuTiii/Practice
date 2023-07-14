import Input from '../Form/Input'
import Select from '../Form/Select'
import SubmitButton from '../Form/SubmitButton'

import styles from './projectForm.module.css'

function ProjectForm({btnText}) {
    return (
        <form className = {styles.form}>
            <Input
            type = "text"
            text = "Nome do projeto"
            name="name"
            placeholder="Insira o nome do projeto"
            />
            <Input
            type = "number"
            text = "orcamento do projeto"
            name="budget"
            placeholder="Insira o orcamento total"
            />
            <Select name = "category_id" text="Selecione a categoria" />
            <SubmitButton text={btnText}/>
        </form>
    )
}

export default ProjectForm