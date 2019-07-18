import React, { useState, useEffect } from 'react'
import Loading from './Loading';

const SingleCourse = (props) => {
    // const divStyle = {
    //     width: '400px'
    // }
    const loadSingleCourse = () => {
        let url = `/cursos/${props.match.params.id}`
        axios.get(url)
            .then(resp => {
                setCurso(resp.data)
                setLoading(false)
            })
            .catch(err => {
                setLoading(false)
                console.log('error al recargar el curso')
            })
    }
    const [curso, setCurso] = useState({})
    const [loading, setLoading] = useState(true)
    useEffect(loadSingleCourse, [props.match.params.id])

    if (loading)
        return <Loading />
    return (
        <div className="container mt-5">
            <div className="row">
                <div className="col-md-12">
                    <div className="card">
                        <div className="card-header">
                            <h2 className="text-center">
                                {curso.curso ? curso.curso : 'Nombre del curso'}
                            </h2>
                        </div>
                        <div className="card-body">
                            Descripcion:
                            <p className="card-text">
                                {curso.descripcion ? curso.descripcion : 'Descripcion del curso'}
                            </p>
                        </div>
                    </div>
                </div>
                <div className="col-md-12 mt-5">
                    <div className="card">
                        <div className="card-header">
                            <h1 className="text-center">Niveles</h1>
                        </div>
                        <div className="card-body">
                            <div className="row">
                                <div className="col-sm-12">
                                    {
                                        curso.niveles.map(nivel => {
                                            return (
                                                <h2 key={nivel.id}>{nivel.nivel}</h2>
                                            )
                                        })
                                    }
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    )
}

export default SingleCourse
