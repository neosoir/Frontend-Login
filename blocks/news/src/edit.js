import { useBlockProps } from "@wordpress/block-editor";
import apiFetcth from "@wordpress/api-fetch";
import { useState, useEffect } from "@wordpress/element";


const Edit = ( props ) => {

    const blockProps = useBlockProps();
    const [ posts, setPosts ] = useState( [] );

    const fetchPosts = async () => {

        let path = "/wp/v2/posts";
        const newPosts = await apiFetcth( { path } );
        setPosts( newPosts );

    }

    useEffect( () => {

        fetchPosts();

    }, [] );
    
    return (

        <>
        
        {

            posts.length > 0 && 
            <div { ...blockProps }>

                <h3>Quisa te interese leer esto:</h3>

                <ul>
                    {
                        posts.map( (post) => {

                            return (
                                <li key={ post.id }>
                                    <a href={ post.link }>
                                        { post.title.rendered }
                                    </a>
                                </li>
                            );

                        } )
                    }
                </ul>

            </div>

        }

        </>

    );

};

export default Edit;