create table pessoa(
    id serial primary key,
    nome varchar (100),
    cpf varchar (11),
    email varchar(100),
    senha varchar(100),
    telefone integer,
    endereco integer
);
create table telefone (
    id serial primary key,
    ddd int,
    numero int,
    med_tel integer,
    pac_tel integer,
    foreign key(med_tel) references medico (telefone),
    foreign key(pac_tel) references paciente (telefone)
);
create table endereco (
    id serial primary key,
    estado varchar(80),
    cidade varchar(80),
    bairro varchar(80),
    rua varchar (80),
    numero int
    med_endereco integer,
    pac_endereco integer,
    foreign key(med_endereco) references medico(telefone),
    foreign key(pac_endereco) references paciente(telefone)
);

create table adm (
    id serial primary key,
    adm_pessoa int,
    foreign key (adm_pessoa) references pessoa (id)
);

create table medico (
    id serial primary key,
    nome varchar (100),
    especialidade varchar(100),
    crm int,
    med_pessoa int,
    foreign key (med_pessoa) references pessoa (id)
);

create table paciente (
    id serial primary key,
    pac_pessoa int,
    foreign key (pac_pessoa) references pessoa (id)
);

create table dependente (
    id serial primary key,
    nome varchar(100),
    cpf varchar(11),
    email varchar(100),
    telefone integer
    dep_pac integer,
    foreign key(dep_pac) references paciente(id),
    foreign key(telefone) references telefone(id)
);

create table consulta (
    id serial primary key,
    con_med int,
    con_pac int,
    foreign key (con_med) references medico (id),
    foreign key (con_pac) references paciente (id)
);

create table prontuario (
    id serial primary key,
    data_at date,
    hora time,
    descricao integer,
    medicacao integer,
    pront_con integer,
    foreign key(pront_con) references consulta(id)
);

create table descricao (
    id serial primary key,
    descricao varchar(200),
    pront_desc integer,
    foreign key (pront_desc) references prontuario(descricao)
);

create table medicacao (
    id serial primary key,
    nome varchar(200),
    horarios time,
    possologia varchar(80),
    pront_medi integer,
    foreign key (pront_medi) references prontuario(medicacao)
);