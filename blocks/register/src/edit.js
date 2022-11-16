import { InspectorControls, RichText } from "@wordpress/block-editor";

/* Site bar with options */
import { Panel, PanelBody, TextControl } from "@wordpress/components";

const Edit = ( props ) => {

    const { className, attributes, setAttributes } = props;
    const { title, nameLabel, nameEmail, namePassword } = attributes;

    return (

        <>
        <InspectorControls>
            <Panel>
                <PanelBody title="Labels" initialOpen={true}>
                    <TextControl 
                        label="Name Label"
                        value={nameLabel}
                        onChange={ ( newLabel ) => setAttributes( { nameLabel: newLabel } ) }
                    />
                    <TextControl 
                        label="Name Email"
                        value={nameEmail}
                        onChange={ ( newLabel ) => setAttributes( { nameEmail: newLabel } ) }
                    />
                    <TextControl 
                        label="Name Password"
                        value={namePassword}
                        onChange={ ( newLabel ) => setAttributes( { namePassword: newLabel } ) }
                    />
                </PanelBody>
            </Panel>
        </InspectorControls>

        <div className={ className }>
            <div className="signin__container">
                {/* Make a custom title */}
                <RichText 
                    tagName="h1"
                    placeholder="Escribe un titulo"
                    className="sigin__titulo"
                    value={title}
                    onChange= { ( newTitle ) => setAttributes( { title: newTitle } ) }
                />
                <form className="signin__form" id="signup">
                    <div className="signin__name name--campo">
                        <label for="Name">{ nameLabel }</label>
                        <input name="name" type="text" id="Name" />
                    </div>
                    <div className="signin__email name--campo">
                        <label for="email">{ nameEmail }</label>
                        <input name="email" type="email" id="email" />
                    </div>
                    <div className="signin__pass name--campo">
                        <label for="password">{ namePassword }</label>
                        <input name="password" type="password" id="password" />
                    </div>
                    <div className="signin__submit">
                        <input type="submit" value="Create" />
                    </div>
                    <div className="msg"></div>
                </form>
            </div>
        </div>
        </>

    );
    
}

export default Edit;