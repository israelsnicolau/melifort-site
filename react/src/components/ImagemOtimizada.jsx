function ImagemOtimizada({
  src,
  alt,
  className,
  prioridade = false,
  ...props
}) {
  return (
    <img
      src={src}
      alt={alt}
      className={className}
      loading={prioridade ? "eager" : "lazy"}
      decoding="async"
      fetchPriority={prioridade ? "high" : "auto"}
      {...props}
    />
  );
}

export default ImagemOtimizada;
